<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Listing;
use App\Models\ListingView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function viewCandidate($slug){
        $listing = Listing::where('slug', $slug)->where('user_id', Auth::user()->id)->firstOrFail();

        $applicants = Applications::where('listing_id', $listing->id)->get();
        $matchScore = rand(70, 100); // Replace with actual match score calculation logic

        return view('recruiter.jobs-candidates', compact('listing', 'applicants', 'matchScore'));
    }

    public function viewCandidateProfile($slug){
        $listing = Listing::where('slug', $slug)->where('user_id', Auth::user()->id)->firstOrFail();
        
        $candidate = Applications::where('listing_id', $listing->id)->firstOrFail();

        return view('recruiter.jobs-candidate-profile', compact('listing', 'candidate'));
    }

    public function index()
    {
        $query = Listing::where('user_id', Auth::user()->id);

        $activeJobs = (clone $query)->where('status', 'active')->count();

        $activeJobsThisWeek = (clone $query)
            ->where('status', 'active')
            ->whereBetween('published_at', [
                now()->startOfWeek(),
                now()->endOfWeek()
            ])->count();

        $draftJobs = (clone $query)
            ->where('status', 'draft')
            ->count();

        $openJobs = (clone $query)
            ->orderByDesc('published_at')
            ->get();

        $totalViews = ListingView::whereIn('listing_id', $openJobs->pluck('id'))
            ->count();

        $todayView = ListingView::whereIn('listing_id', $openJobs->pluck('id'))
            ->whereBetween('created_at', [
                now()->startOfDay(),
                now()->endOfDay(),
            ])->count();

        $viewIncreaseRate = $totalViews > 0 ? round(($todayView / $totalViews) * 100) : 0;

        $totalApplications = Applications::whereIn('listing_id', $openJobs->pluck('id'))->count();

        $totalApplicationsToday = Applications::whereIn('listing_id', $openJobs->pluck('id'))
            ->whereBetween('created_at', [
                now()->startOfDay(),
                now()->endOfDay(),
            ])->count();

        return view('recruiter.jobs', compact('activeJobs', 'activeJobsThisWeek', 'draftJobs', 'openJobs', 'totalViews', 'viewIncreaseRate', 'totalApplications', 'totalApplicationsToday'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruiter.jobs-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'job_title' => ['required'],
                'company_name' => ['required'],
                'department' => ['required'],
                'location' => ['required'],
                'work_type' => ['required'],
                'employment_type' => ['required'],
                'experience_level' => ['required'],
                'min_experience_in_years' => ['nullable', 'integer', 'min:0'],
                'hiring_urgency' => ['required'],
                'salary_min' => ['required', 'integer', 'min:0'],
                'salary_max' => ['required', 'integer', 'min:0', 'gte:salary_min'],
                'salary_currency' => ['required'],
                'skills' => ['required', 'json'],
                'responsibilities' => ['required'],
                'role_summary' => ['required'],
                'job_description' => ['nullable'],
                'closing_date' => ['required', 'date', 'after:today'],
            ],
            [
                'job_title.required' => 'The job title is required.',
                'company_name.required' => 'The company name is required.',
                'department.required' => 'The department is required.',
                'location.required' => 'The location is required.',
                'work_type.required' => 'The work type is required.',
                'work_type.in' => 'The work type must be one of: remote, hybrid, on-site.',
                'employment_type.required' => 'The employment type is required.',
                'experience_level.required' => 'The experience level is required.',
                'min_experience_in_years.integer' => 'The minimum experience must be an integer.',
                'min_experience_in_years.min' => 'The minimum experience must be at least 0.',
                'hiring_urgency.required' => 'The hiring urgency is required.',
                'salary_min.required' => 'The minimum salary is required.',
                'salary_min.integer' => 'The minimum salary must be an integer.',
                'salary_min.min' => 'The minimum salary must be at least 0.',
                'salary_max.required' => 'The maximum salary is required.',
                'salary_max.integer' => 'The maximum salary must be an integer.',
                'salary_max.min' => 'The maximum salary must be at least 0.',
                'salary_max.gte' => 'The maximum salary must be greater than or equal to the minimum salary.',
                'salary_currency.required' => 'The salary currency is required.',
                'skills.required' => 'The skills are required.',
                'skills.json' => 'The skills must be a valid JSON string.',
                'responsibilities.required' => 'The responsibilities are required.',
                'role_summary.required' => 'The role summary is required.',
                'closing_date.required' => 'The closing date is required.',
                'closing_date.date' => 'The closing date must be a valid date.',
                'closing_date.after' => 'The closing date must be a future date.',
            ]
        );

        $slug = Str::slug($request->job_title) . '-' . substr(Str::uuid(), 0, 8);
        $slugCount = Listing::where('slug', 'LIKE', "{$slug}%")->count();
        if ($slugCount > 0) {
            $slug .= '-' . ($slugCount + 1);
        }

        $action = $request->input('action');

        if ($action === 'publish') {
            $request->merge([
                'status' => 'active',
            ]);
        } elseif ($action === 'draft') {
            $request->merge([
                'status' => 'draft',
            ]);
        }

        Listing::create([
            'user_id' => Auth::user()->id,
            'job_title' => $request->job_title,
            'slug' => $slug,
            'company_name' => $request->company_name,
            'department' => $request->department,
            'location' => $request->location,
            'work_type' => $request->work_type,
            'employment_type' => $request->employment_type,
            'experience_level' => $request->experience_level,
            'min_experience_in_years' => $request->min_experience_in_years,
            'hiring_urgency' => $request->hiring_urgency,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'salary_currency' => $request->salary_currency,
            'skills' => $request->skills,
            'responsibilities' => $request->responsibilities,
            'role_summary' => $request->role_summary,
            'job_description' => $request->job_description,
            'status' => $request->status,
            'published_at' => $request->status === 'active' ? now() : null,
            'closing_date' => $request->closing_date,
        ]);

        if ($action === 'publish') {
            return back()->with('success', 'Job listing published successfully.');
        } elseif ($action === 'draft') {
            return back()->with('success', 'Job listing saved as draft successfully.');
        }

        return back()->with('success', 'Job listing saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
