@extends('layouts.recruiter')

@section('title', 'View Candidates - HireFlow Recruiter')

@section('content')
    @php
        $jobSlug = request('job', 'senior-product-designer');
        $jobTitle = str($jobSlug)->replace('-', ' ')->title();

        $demoCandidates = [
            [
                'name' => 'Ava Thompson',
                'role' => 'Senior Product Designer',
                'location' => 'Jakarta, Indonesia',
                'stage' => 'Interview',
                'match' => 92,
                'experience' => '7 years',
                'last_activity' => '2 hours ago',
            ],
            [
                'name' => 'Noah Patel',
                'role' => 'Product Designer',
                'location' => 'Bandung, Indonesia',
                'stage' => 'Screening',
                'match' => 86,
                'experience' => '5 years',
                'last_activity' => 'Today',
            ],
            [
                'name' => 'Sophia Chen',
                'role' => 'Lead UX Designer',
                'location' => 'Singapore',
                'stage' => 'Offer',
                'match' => 95,
                'experience' => '9 years',
                'last_activity' => 'Yesterday',
            ],
            [
                'name' => 'Liam Scott',
                'role' => 'Interaction Designer',
                'location' => 'Kuala Lumpur, Malaysia',
                'stage' => 'Applied',
                'match' => 81,
                'experience' => '4 years',
                'last_activity' => '1 day ago',
            ],
        ];
    @endphp

    <div class="mx-auto max-w-7xl space-y-6">
        <section
            class="overflow-hidden rounded-3xl border border-slate-800/70 bg-linear-to-r from-slate-950 via-slate-900 to-blue-900 p-6 text-white shadow-xl shadow-slate-950/30 lg:p-8">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-200">Candidates Workspace</p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight">View Candidates for {{ $jobTitle }}</h2>
                    <p class="mt-2 text-sm text-slate-300 sm:text-base">Demo candidates list for recruiter dashboard and jobs cards.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('recruiter.jobs') }}"
                        class="rounded-xl border border-white/20 bg-white/10 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">Back
                        to Jobs</a>
                    <button type="button"
                        class="rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">Export
                        List</button>
                </div>
            </div>
        </section>

        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Total candidates</p>
                <p class="mt-2 text-3xl font-bold text-slate-900">{{ count($applicants) }}</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Interview stage</p>
                <p class="mt-2 text-3xl font-bold text-slate-900">1</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Average match</p>
                <p class="mt-2 text-3xl font-bold text-slate-900">89%</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">New today</p>
                <p class="mt-2 text-3xl font-bold text-slate-900">2</p>
            </article>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="mb-4 flex items-center justify-between">
                <h3 class="text-xl font-bold text-slate-900">Candidate List</h3>
                <span class="rounded-full bg-slate-800 px-3 py-1 text-xs font-semibold text-slate-700">Demo Data</span>
            </div>

            <div class="space-y-3">
                @foreach ($applicants as $candidate)
                    @php
                        $candidateSlug = str($candidate->applicant_name)->slug('-');
                    @endphp
                    <article class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                            <div>
                                <h4 class="text-base font-semibold text-slate-900">{{ $candidate->applicant_name }}</h4>
                                <p class="mt-1 text-sm text-slate-600">{{ $listing->job_title }} • {{ $listing->experience_level }} • {{ $listing->location }}</p>
                            </div>

                            <div class="flex flex-wrap items-center gap-2">
                                <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">{{ $matchScore }}% match</span>
                                @if($candidate->stage || $candidate->last_activity)
                                    <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">{{ $candidate->stage }}</span>
                                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs font-semibold text-slate-800">{{ $candidate->last_activity }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-2">
                            <a href="{{ route('recruiter.jobs.candidate.profile', $listing->slug) }}"
                                class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-700">View
                                Profile</a>
                            <button type="button" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Move Stage</button>
                            <button type="button" class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Message</button>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
@endsection
