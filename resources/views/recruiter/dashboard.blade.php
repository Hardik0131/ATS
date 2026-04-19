@extends('layouts.recruiter')

@section('title', 'HireFlow Recruiter Dashboard')

@section('content')
    <div class="mx-auto max-w-7xl space-y-6">
        <section class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-2xl space-y-3">
                    <p class="text-xs font-semibold tracking-[0.18em] text-blue-300">HIRING WORKFLOW</p>
                    <h2 class="text-3xl font-bold tracking-tight text-slate-100 sm:text-4xl">Manage candidates, jobs, interviews, and offers from one ATS command center.</h2>
                    <p class="text-sm text-slate-300 sm:text-base">Now with interactive charts like the admin panel for real tracking-style visuals.</p>
                </div>
                <div class="space-y-4 lg:w-md">
                    <a href="{{ route('recruiter.jobs') }}" class="group flex items-center justify-between rounded-3xl border-2 border-blue-600 bg-linear-to-r from-blue-600 to-indigo-600 px-5 py-4 text-white shadow-lg shadow-blue-600/25 transition hover:-translate-y-0.5 hover:shadow-xl hover:shadow-blue-600/30">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-blue-100">Quick action</p>
                            <p class="mt-1 text-lg font-bold">New Position</p>
                            <p class="text-sm text-blue-50/90">Open the Jobs page to create a position</p>
                        </div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-white transition group-hover:bg-white/25">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14" />
                                <path d="M5 12h14" />
                            </svg>
                        </span>
                    </a>
                    <div class="grid gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-300">Pipeline</p><p class="mt-2 text-2xl font-bold text-slate-100">42%</p><p class="text-xs text-slate-400">to interview</p></div>
                        <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-300">Offers</p><p class="mt-2 text-2xl font-bold text-slate-100">6</p><p class="text-xs text-slate-400">awaiting reply</p></div>
                        <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-300">Hires</p><p class="mt-2 text-2xl font-bold text-slate-100">3</p><p class="text-xs text-slate-400">this month</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30"><p class="text-sm font-medium text-slate-300">Total Candidates</p><div class="mt-3 flex items-end justify-between"><h2 class="text-4xl font-bold text-slate-100">186</h2><span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">+14</span></div></article>
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30"><p class="text-sm font-medium text-slate-300">Ready to Interview</p><div class="mt-3 flex items-end justify-between"><h2 class="text-4xl font-bold text-slate-100">24</h2><span class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">+3</span></div></article>
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30"><p class="text-sm font-medium text-slate-300">Offers Sent</p><div class="mt-3 flex items-end justify-between"><h2 class="text-4xl font-bold text-slate-100">6</h2><span class="rounded-full bg-amber-50 px-3 py-1 text-sm font-semibold text-amber-700">2 pending</span></div></article>
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30"><p class="text-sm font-medium text-slate-300">Hires This Month</p><div class="mt-3 flex items-end justify-between"><h2 class="text-4xl font-bold text-slate-100">3</h2><span class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">On target</span></div></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold text-slate-100">Job Listings</h3><p class="text-sm text-slate-300">Open roles and statuses</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">Create Job</button></div>
                <div class="mt-6 grid gap-4 lg:grid-cols-2">
                    <article class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-5"><div class="flex items-start justify-between gap-4"><div><h4 class="text-base font-semibold text-slate-100">Senior Product Designer</h4><p class="mt-1 text-sm text-slate-300">Remote / Full-time / $120k - $145k</p></div><span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Active</span></div><div class="mt-4 flex gap-3"><a href="#" class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">View Candidates</a><button class="rounded-xl border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 hover:bg-slate-800">Edit Job</button></div></article>
                    <article class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-5"><div class="flex items-start justify-between gap-4"><div><h4 class="text-base font-semibold text-slate-100">Recruitment Ops Manager</h4><p class="mt-1 text-sm text-slate-300">Hybrid / Full-time / $95k - $115k</p></div><span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Draft</span></div><div class="mt-4 flex gap-3"><a href="#" class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">View Candidates</a><button class="rounded-xl border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 hover:bg-slate-800">Edit Job</button></div></article>
                </div>
            </article>

            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30">
                <h3 class="text-lg font-semibold text-slate-100">Activity Signals</h3>
                <div class="mt-5 space-y-3">
                    <div class="rounded-2xl border border-rose-100 bg-rose-50 p-4"><p class="text-sm font-semibold text-rose-800">Needs review</p><p class="mt-1 text-sm text-rose-700">8 candidates need scorecard feedback.</p></div>
                    <div class="rounded-2xl border border-amber-100 bg-amber-50 p-4"><p class="text-sm font-semibold text-amber-800">Follow-ups due</p><p class="mt-1 text-sm text-amber-700">5 interviews still waiting for action.</p></div>
                    <div class="rounded-2xl border border-blue-100 bg-blue-50 p-4"><p class="text-sm font-semibold text-blue-800">Interviews today</p><p class="mt-1 text-sm text-blue-700">7 meetings scheduled across 3 roles.</p></div>
                </div>
            </article>
        </section>

        <section class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30">
            <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold text-slate-100">Candidate Pipeline</h3><p class="text-sm text-slate-300">Horizontal scroll on mobile</p></div></div>
            <div class="mt-6 overflow-x-auto pb-2">
                <div class="grid min-w-275 grid-cols-5 gap-4">
                    @php
                        $pipeline = [
                            'Applied' => [
                                ['name' => 'Olivia Martin', 'role' => 'Senior Designer', 'match' => '92%', 'skills' => ['Figma', 'UX', 'Design Systems']],
                                ['name' => 'Ethan Brooks', 'role' => 'Frontend Engineer', 'match' => '88%', 'skills' => ['React', 'Tailwind', 'Testing']],
                            ],
                            'Screening' => [
                                ['name' => 'Sophia Chen', 'role' => 'Talent Partner', 'match' => '84%', 'skills' => ['Hiring', 'ATS', 'Sourcing']],
                                ['name' => 'Noah Patel', 'role' => 'Recruiter', 'match' => '81%', 'skills' => ['Screening', 'Communication', 'CRM']],
                            ],
                            'Interview' => [
                                ['name' => 'Ava Thompson', 'role' => 'Product Manager', 'match' => '89%', 'skills' => ['Leadership', 'Roadmaps', 'Discovery']],
                                ['name' => 'Liam Scott', 'role' => 'Data Analyst', 'match' => '85%', 'skills' => ['SQL', 'Reporting', 'Insights']],
                            ],
                            'Offer' => [
                                ['name' => 'Mia Garcia', 'role' => 'Recruiter Lead', 'match' => '94%', 'skills' => ['Negotiation', 'Offers', 'Hiring']],
                            ],
                            'Hired' => [
                                ['name' => 'James Wilson', 'role' => 'Engineering Manager', 'match' => '98%', 'skills' => ['Leadership', 'Delivery', 'Mentoring']],
                            ],
                        ];
                    @endphp

                    @foreach ($pipeline as $stage => $candidates)
                        <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4">
                            <div class="flex items-center justify-between"><h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-slate-300">{{ $stage }}</h4><span class="rounded-full bg-slate-900 px-2.5 py-1 text-xs font-semibold text-slate-300">{{ count($candidates) }}</span></div>
                            <div class="mt-4 space-y-3">
                                @foreach ($candidates as $candidate)
                                    <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-4 shadow-sm">
                                        <div class="flex items-start justify-between gap-3"><div><p class="font-semibold text-slate-100">{{ $candidate['name'] }}</p><p class="text-sm text-slate-300">{{ $candidate['role'] }}</p></div><span class="rounded-full bg-blue-50 px-2.5 py-1 text-xs font-semibold text-blue-700">{{ $candidate['match'] }}</span></div>
                                        <div class="mt-3 flex flex-wrap gap-2">@foreach ($candidate['skills'] as $skill)<span class="rounded-full border border-slate-700 bg-slate-900 px-2.5 py-1 text-xs font-medium text-slate-300">{{ $skill }}</span>@endforeach</div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold text-slate-100">Interview Management</h3><p class="text-sm text-slate-300">Upcoming meetings and actions</p></div><button class="rounded-xl border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-200 hover:bg-slate-800">Schedule</button></div>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead><tr class="border-b border-slate-800/70 text-slate-400"><th class="px-4 py-3 font-medium">Candidate</th><th class="px-4 py-3 font-medium">Role</th><th class="px-4 py-3 font-medium">Time</th><th class="px-4 py-3 font-medium">Status</th><th class="px-4 py-3 font-medium">Actions</th></tr></thead>
                        <tbody>
                            <tr class="border-b border-slate-800/70"><td class="px-4 py-4 font-medium text-slate-100">Olivia Martin</td><td class="px-4 py-4 text-slate-300">Senior Designer</td><td class="px-4 py-4 text-slate-300">10:30 AM</td><td class="px-4 py-4"><span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">Confirmed</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-700 px-3 py-2 text-xs font-semibold text-slate-200 hover:bg-slate-800">Reschedule</button></div></td></tr>
                            <tr class="border-b border-slate-800/70"><td class="px-4 py-4 font-medium text-slate-100">Ava Thompson</td><td class="px-4 py-4 text-slate-300">Product Manager</td><td class="px-4 py-4 text-slate-300">1:00 PM</td><td class="px-4 py-4"><span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-700 px-3 py-2 text-xs font-semibold text-slate-200 hover:bg-slate-800">Reschedule</button></div></td></tr>
                            <tr><td class="px-4 py-4 font-medium text-slate-100">Liam Scott</td><td class="px-4 py-4 text-slate-300">Data Analyst</td><td class="px-4 py-4 text-slate-300">4:15 PM</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Ready</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-700 px-3 py-2 text-xs font-semibold text-slate-200 hover:bg-slate-800">Reschedule</button></div></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="rounded-2xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-md shadow-slate-950/30">
                <div class="flex items-center justify-between"><h3 class="text-lg font-semibold text-slate-100">Analytics</h3><div class="flex gap-2 text-xs font-semibold" data-range-group="recruiter-mini"><button type="button" data-range="7d" class="rounded-lg bg-slate-950 px-3 py-1.5 text-white">7D</button><button type="button" data-range="30d" class="rounded-lg border border-slate-700 px-3 py-1.5 text-slate-200">30D</button><button type="button" data-range="90d" class="rounded-lg border border-slate-700 px-3 py-1.5 text-slate-200">90D</button></div></div>
                <div class="mt-5 space-y-4">
                    <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-sm font-semibold text-slate-100">Funnel chart</p><div class="mt-3"><canvas id="recruiter-funnel-chart" height="120"></canvas></div></div>
                    <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-sm font-semibold text-slate-100">Applications per job</p><div class="mt-3"><canvas id="recruiter-applications-chart" height="100"></canvas></div></div>
                    <div class="rounded-2xl border border-slate-800/70 bg-slate-950/60 p-4"><p class="text-sm font-semibold text-slate-100">Hiring trend</p><div class="mt-3"><canvas id="recruiter-trend-chart" height="100"></canvas></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection
