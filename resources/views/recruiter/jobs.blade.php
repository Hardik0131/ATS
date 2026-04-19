@extends('layouts.recruiter')

@section('title', 'Jobs - HireFlow Recruiter')

@section('content')
    <div class="mx-auto max-w-7xl space-y-6">
        <section
            class="overflow-hidden rounded-3xl border border-slate-200 bg-linear-to-r from-slate-950 via-slate-900 to-blue-950 text-white shadow-xl shadow-slate-900/20">
            <div class="grid gap-8 px-6 py-8 lg:grid-cols-[1.3fr_0.7fr] lg:px-8 lg:py-10">
                <div class="space-y-5">
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/8 px-3 py-1 text-xs font-semibold tracking-[0.16em] text-blue-200 backdrop-blur-sm">
                        JOBS WORKSPACE
                    </div>
                    <div class="space-y-3">
                        <h2 class="max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl">Track and manage active roles
                            from one place.</h2>
                        <p class="max-w-2xl text-sm text-white/75 sm:text-base">Use this page for job monitoring. Posting a
                            new role is now on a dedicated create page for easier handling.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('recruiter.job.create') }}"
                            class="inline-flex items-center rounded-xl border border-white/20 bg-white/10 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-black/20 transition hover:-translate-y-0.5 hover:bg-white/15">Create
                            new role</a>
                        <button type="button" data-open-roles-trigger
                            class="inline-flex items-center rounded-xl border border-white/15 bg-white/5 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">Review
                            open roles</button>
                    </div>
                </div>

                <div class="grid gap-3 sm:grid-cols-3 lg:grid-cols-1">
                    <div class="rounded-2xl border border-white/10 bg-white/8 p-4 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-blue-200">Active jobs</p>
                        <p class="mt-2 text-3xl font-bold">{{ $activeJobs }}</p>
                        <p class="mt-1 text-sm text-white/65">{{ $activeJobsThisWeek }} new this week</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/8 p-4 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-blue-200">Draft jobs</p>
                        <p class="mt-2 text-3xl font-bold">{{ $draftJobs }}</p>
                        <p class="mt-1 text-sm text-white/65">Ready to publish</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/8 p-4 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-blue-200">Applications</p>
                        <p class="mt-2 text-3xl font-bold">{{ $totalApplications }}</p>
                        <p class="mt-1 text-sm text-white/65">Across all jobs</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Open roles live</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-3xl font-bold text-slate-900">{{ $activeJobs }}</h2><span
                        class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">+{{ $activeJobsThisWeek }}
                        this week</span>
                </div>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Draft jobs</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-3xl font-bold text-slate-900">{{ $draftJobs }}</h2><span
                        class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Needs review</span>
                </div>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Candidate views</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-3xl font-bold text-slate-900">{{ $totalViews }}</h2><span
                        class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">+{{ $viewIncreaseRate }}% Today</span>
                </div>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Applications</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-3xl font-bold text-slate-900">{{ $totalApplications }}</h2><span
                        class="rounded-full bg-slate-600 px-3 py-1 text-xs font-semibold text-slate-200">{{ $totalApplicationsToday }} today</span>
                </div>
            </article>
        </section>

        <section class="grid gap-6 lg:grid-cols-2">
            <article id="open-roles" class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-600">OPEN ROLES</p>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Jobs with candidate activity</h3>
                        <p class="mt-1 text-sm text-slate-500">Review what is live right now. Create and publish jobs from
                            the dedicated form page.</p>
                    </div>
                    <a href="{{ route('recruiter.job.create') }}"
                        class="inline-flex items-center justify-center rounded-xl border-2 border-blue-600 bg-linear-to-r from-blue-600 to-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:shadow-xl hover:shadow-blue-600/30">New
                        Job</a>
                </div>
                <div class="mt-6 space-y-4">
                    @foreach ($openJobs as $job)
                        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    @php

                                        if ($job->salary_currency === 'USD') {
                                            $salaryRange =
                                                '$' .
                                                number_format($job->salary_min) .
                                                ' - $' .
                                                number_format($job->salary_max);
                                        } elseif ($job->salary_currency === 'EUR') {
                                            $salaryRange =
                                                '€' .
                                                number_format($job->salary_min) .
                                                ' - €' .
                                                number_format($job->salary_max);
                                        } elseif ($job->salary_currency === 'INR') {
                                            $salaryRange =
                                                '₹' .
                                                number_format($job->salary_min) .
                                                ' - ₹' .
                                                number_format($job->salary_max);
                                        } else {
                                            $salaryRange =
                                                number_format($job->salary_min) .
                                                ' - ' .
                                                number_format($job->salary_max) .
                                                ' ' .
                                                strtoupper($job->salary_currency);
                                        }
                                    @endphp
                                    <p class="text-base font-semibold text-slate-900">{{ ucfirst($job->job_title) }}</p>
                                    <p class="mt-1 text-sm text-slate-500">{{ ucfirst($job->work_type) }} /
                                        {{ $salaryRange }}</p>
                                    @php
                                        $jobPublicLink = route('jobs.detail', ['slug' => $job->slug]);
                                    @endphp
                                </div>
                                @if ($job->status === 'active')
                                    <span
                                        class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">{{ ucfirst($job->status) }}</span>
                                @elseif ($job->status === 'draft')
                                    <span
                                        class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">{{ ucfirst($job->status) }}</span>
                                @endif
                            </div>
                            <div class="mt-4 flex flex-wrap gap-3">
                                @if ($job->status === 'active')
                                    <a href="{{ route('recruiter.jobs.candidates', $job->slug) }}"
                                        class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700">View
                                        Candidates</a>
                                @else
                                    <button
                                        class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Continue
                                        Editing</button>
                                @endif
                                <button
                                    class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Edit
                                    Job</button>
                                @if ($job->status === 'active')
                                    <button type="button" data-copy-job-link data-link="{{ $jobPublicLink }}"
                                        class="rounded-xl border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 cursor-pointer">Copy
                                        Link</button>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </article>

            <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-600">JOB HEALTH</p>
                        <h3 class="mt-2 text-xl font-bold text-slate-900">Role performance snapshot</h3>
                    </div>
                    <span class="rounded-full bg-slate-600 px-3 py-1 text-xs font-semibold text-slate-200">This week</span>
                </div>
                <div class="mt-6 space-y-4 text-sm">
                    <div>
                        <div class="flex justify-between text-slate-600"><span>Designer role</span><span>84
                                applicants</span></div>
                        <div class="mt-2 h-2 rounded-full bg-slate-100">
                            <div class="h-2 w-[84%] rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-slate-600"><span>Ops manager</span><span>38 applicants</span>
                        </div>
                        <div class="mt-2 h-2 rounded-full bg-slate-100">
                            <div class="h-2 w-[38%] rounded-full bg-blue-400"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-slate-600"><span>QA lead</span><span>56 applicants</span>
                        </div>
                        <div class="mt-2 h-2 rounded-full bg-slate-100">
                            <div class="h-2 w-[56%] rounded-full bg-blue-500"></div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openRolesTrigger = document.querySelector('[data-open-roles-trigger]');
            const openRolesSection = document.getElementById('open-roles');
            const copyLinkButtons = document.querySelectorAll('[data-copy-job-link]');

            if (openRolesTrigger && openRolesSection) {
                openRolesTrigger.addEventListener('click', function() {
                    openRolesSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            }

            copyLinkButtons.forEach(function(button) {
                button.addEventListener('click', async function() {
                    const link = button.getAttribute('data-link');

                    if (!link) {
                        return;
                    }

                    const originalLabel = button.textContent.trim();

                    try {
                        await navigator.clipboard.writeText(link);
                        button.textContent = 'Copied!';
                    } catch (error) {
                        const fallbackInput = document.createElement('input');
                        fallbackInput.value = link;
                        document.body.appendChild(fallbackInput);
                        fallbackInput.select();
                        document.execCommand('copy');
                        document.body.removeChild(fallbackInput);
                        button.textContent = 'Copied!';
                    }

                    setTimeout(function() {
                        button.textContent = originalLabel;
                    }, 1400);
                });
            });
        });
    </script>
@endsection
