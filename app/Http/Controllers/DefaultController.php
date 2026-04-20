<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Listing;
use App\Models\ListingView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DefaultController extends Controller
{

    public function jobDetail($slug)
    {
        $listing = Listing::where('slug', $slug)->where('status', 'active')->firstOrFail();

        $token = request()->cookie('visitor_token');

        if (!request()->cookie('visitor_token')) {
            $token = (string) Str::uuid();
        }

        $exists = ListingView::where('listing_id', $listing->id)
            ->where('visitor_token', $token)
            ->where('created_at', '>=', now()->subDay())
            ->exists();

        if (!$exists) {
            ListingView::create([
                'listing_id' => $listing->id,
                'visitor_token' => $token,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        // $ip = request()->ip();

        // $exists = DB::table('job_views')
        //     ->where('listing_id', $listing->id)
        //     ->where('ip_address', $ip)
        //     ->whereDate('created_at', now()->toDateString())
        //     ->exists();

        // if(!$exists) {
        //     DB::table('job_views')->insert([
        //         'listing_id' => $listing->id,
        //         'ip_address' => $ip,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);

        //     $listing->increment('views');
        // }

        $response = response()->view('pages.job-detail', compact('listing'));

        return $response->cookie('visitor_token', $token, 60 * 24 * 30); // Store for 30 days
    }

    public function jobApply($slug)
    {
        $listing = Listing::where('slug', $slug)->where('status', 'active')->firstOrFail();

        return view('pages.job-apply', compact('listing'));
    }

    public function applicationsStore(Request $request, $slug)
    {
        $listing = Listing::where('slug', $slug)->where('status', 'active')->firstOrFail();

        $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|regex:/^[0-9+\-\s]+$/|max:20',
                'current_location' => 'required',
                'portfolio_link' => 'nullable|url',
                'linkedin_link' => 'nullable|url',
                'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
                'cover_letter' => 'nullable',
            ],
            [
                'phone.regex' => 'The phone number format is invalid. Only numbers, spaces, + and - are allowed.',
                'resume.mimes' => 'The resume must be a file of type: pdf, doc, docx.',
                'resume.max' => 'The resume may not be greater than 5MB.',
            ]
        );

        $slug = Str::slug($request->first_name . ' ' . $request->last_name) . '-' . substr(Str::uuid(), 0, 8);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        Applications::create([
            'listing_id' => $listing->id,
            'user_id' => Auth::user()->id,
            'applicant_name' => $request->first_name . ' ' . $request->last_name,
            'slug' => $slug,
            'applicant_email' => $request->email,
            'mobile_number' => $request->phone,
            'current_location' => $request->current_location,
            'portfolio_link' => $request->portfolio_link,
            'linkedin_link' => $request->linkedin_link,
            'resume_path' => $resumePath,
            'cover_letter' => $request->cover_letter,
            'resume_score' => 0,
        ]);

        return back()->with('success', 'Your application has been submitted successfully!');
    }
}
