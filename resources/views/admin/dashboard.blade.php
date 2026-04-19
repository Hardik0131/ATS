@extends('layouts.admin')

@section('title', 'HireFlow Admin Dashboard')

@section('content')
    <div class="mx-auto max-w-7xl space-y-6">
        <section class="overflow-hidden rounded-4xl border border-slate-800/70 bg-linear-to-br from-slate-950 via-slate-900 to-slate-800 text-white shadow-2xl shadow-slate-950/40">
            <div class="grid gap-8 px-6 py-8 lg:grid-cols-[1.35fr_0.95fr] lg:px-8">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold tracking-[0.16em] text-blue-200">
                        LIVE OPERATIONS
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    </div>
                    <div class="space-y-3">
                        <h2 class="max-w-2xl text-3xl font-semibold tracking-tight sm:text-4xl">Operational tracking for hiring volume, source quality, and pipeline conversion.</h2>
                        <p class="max-w-2xl text-sm leading-6 text-slate-300 sm:text-base">This dashboard uses real chart components and sample data so the analytics surface feels active instead of decorative.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button class="rounded-xl border border-white/10 bg-white/10 px-4 py-2 text-sm font-semibold text-white">Today</button>
                        <button class="rounded-xl border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-white">7D</button>
                        <button class="rounded-xl border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-white">30D</button>
                        <button class="rounded-xl border border-white/15 bg-white/5 px-4 py-2 text-sm font-semibold text-white">90D</button>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">Today so far</p>
                        <div class="mt-4 flex items-end justify-between">
                            <div>
                                <p class="text-3xl font-bold">1,284</p>
                                <p class="mt-1 text-sm text-slate-300">Applications received</p>
                            </div>
                            <span class="rounded-full bg-emerald-400/15 px-3 py-1 text-sm font-semibold text-emerald-300">+18%</span>
                        </div>
                    </div>
                    <div class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-5 text-slate-100 shadow-lg shadow-slate-950/30">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-300">Pipeline health</p>
                        <div class="mt-4 flex items-center gap-4">
                            <div class="flex-1">
                                <div class="flex items-center justify-between text-sm text-slate-200"><span>Shortlist rate</span><span class="font-semibold">42%</span></div>
                                <div class="mt-2 h-2 rounded-full bg-slate-800"><div class="h-2 w-[42%] rounded-full bg-blue-500"></div></div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold">96%</p>
                                <p class="text-xs text-slate-300">Uptime</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <p class="text-sm font-medium text-slate-300">Total Users</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-4xl font-bold text-slate-100">12,480</h2>
                    <span class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-600">+4%</span>
                </div>
                <p class="mt-3 text-xs text-slate-400">Weekly growth trend is stable.</p>
            </article>
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <p class="text-sm font-medium text-slate-300">Active Recruiters</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-4xl font-bold text-slate-100">1,120</h2>
                    <span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-600">+12%</span>
                </div>
                <p class="mt-3 text-xs text-slate-400">Recruiter engagement is up.</p>
            </article>
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <p class="text-sm font-medium text-slate-300">Jobs Live</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-4xl font-bold text-slate-100">3,965</h2>
                    <span class="rounded-full bg-amber-50 px-3 py-1 text-sm font-semibold text-amber-600">+7%</span>
                </div>
                <p class="mt-3 text-xs text-slate-400">New listings published this week.</p>
            </article>
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <p class="text-sm font-medium text-slate-300">Applications</p>
                <div class="mt-3 flex items-end justify-between">
                    <h2 class="text-4xl font-bold text-slate-100">28,400</h2>
                    <span class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-600">+4%</span>
                </div>
                <p class="mt-3 text-xs text-slate-400">Candidate flow is on target.</p>
            </article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30 xl:col-span-2">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-100">Hiring Activity</h3>
                        <p class="text-sm text-slate-300">Applications, interviews, and offers over time</p>
                    </div>
                    <div class="flex flex-wrap gap-2 text-sm font-semibold" data-range-group="hiring">
                        <button type="button" data-range="7d" class="rounded-xl bg-slate-950 px-4 py-2 text-white">7D</button>
                        <button type="button" data-range="30d" class="rounded-xl border border-slate-700 px-4 py-2 text-slate-200">30D</button>
                        <button type="button" data-range="90d" class="rounded-xl border border-slate-700 px-4 py-2 text-slate-200">90D</button>
                    </div>
                </div>
                <div class="mt-6 rounded-3xl border border-slate-800/70 bg-slate-950/60 p-4">
                    <canvas id="hiring-activity-chart" height="140"></canvas>
                </div>
            </article>

            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-100">Source Mix</h3>
                        <p class="text-sm text-slate-300">Which channels are converting best</p>
                    </div>
                </div>
                <div class="mt-6">
                    <canvas id="source-mix-chart" height="230"></canvas>
                </div>
                <div class="mt-6 space-y-3 text-sm">
                    <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3"><span class="text-slate-300">Referral</span><span class="font-semibold text-slate-100">34%</span></div>
                    <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3"><span class="text-slate-300">Job boards</span><span class="font-semibold text-slate-100">29%</span></div>
                    <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3"><span class="text-slate-300">Career site</span><span class="font-semibold text-slate-100">21%</span></div>
                </div>
            </article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30 xl:col-span-2">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-100">Job Volume</h3>
                        <p class="text-sm text-slate-300">Published roles and forecasted activity</p>
                    </div>
                    <span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">Forecast: +11%</span>
                </div>
                <div class="mt-6 rounded-3xl border border-slate-800/70 bg-slate-950/60 p-4">
                    <canvas id="job-volume-chart" height="140"></canvas>
                </div>
            </article>

            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-100">Role Distribution</h3>
                        <p class="text-sm text-slate-300">Platform access breakdown</p>
                    </div>
                </div>
                <div class="mt-6">
                    <canvas id="role-distribution-chart" height="220"></canvas>
                </div>
                <div class="mt-6 space-y-3 text-sm">
                    <div class="flex items-center justify-between"><span class="flex items-center gap-2 text-slate-300"><span class="h-3 w-3 rounded-full bg-blue-500"></span>Recruiters</span><span class="font-semibold text-slate-100">45%</span></div>
                    <div class="flex items-center justify-between"><span class="flex items-center gap-2 text-slate-300"><span class="h-3 w-3 rounded-full bg-sky-400"></span>Employers</span><span class="font-semibold text-slate-100">30%</span></div>
                    <div class="flex items-center justify-between"><span class="flex items-center gap-2 text-slate-300"><span class="h-3 w-3 rounded-full bg-emerald-400"></span>Job Seekers</span><span class="font-semibold text-slate-100">25%</span></div>
                </div>
            </article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30 xl:col-span-2">
                <h3 class="text-lg font-semibold text-slate-100">Recent Activity</h3>
                <p class="text-sm text-slate-300">Latest platform events</p>
                <div class="mt-6 space-y-4">
                    <div class="flex items-start gap-4 rounded-2xl bg-slate-950/60 p-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 5v14M5 12h14" stroke-linecap="round" /></svg>
                        </span>
                        <div>
                            <p class="font-medium text-slate-100">New recruiter registered</p>
                            <p class="text-sm text-slate-300">Sarah Khan joined from Atlas Hiring Co.</p>
                        </div>
                        <span class="ml-auto text-xs text-slate-400">2m ago</span>
                    </div>
                    <div class="flex items-start gap-4 rounded-2xl bg-slate-950/60 p-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12l4 4L19 6" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </span>
                        <div>
                            <p class="font-medium text-slate-100">Job posted</p>
                            <p class="text-sm text-slate-300">Senior Product Designer role published to 3 channels.</p>
                        </div>
                        <span class="ml-auto text-xs text-slate-400">18m ago</span>
                    </div>
                    <div class="flex items-start gap-4 rounded-2xl bg-slate-950/60 p-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </span>
                        <div>
                            <p class="font-medium text-slate-100">Application submitted</p>
                            <p class="text-sm text-slate-300">1,280 candidates applied in the last 24 hours.</p>
                        </div>
                        <span class="ml-auto text-xs text-slate-400">1h ago</span>
                    </div>
                </div>
            </article>

            <article class="space-y-6">
                <div class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                    <h3 class="text-lg font-semibold text-slate-100">System Health</h3>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3">
                            <span class="text-slate-300">API Status</span>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Healthy</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3">
                            <span class="text-slate-300">Queue</span>
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">Running</span>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-slate-950/60 px-4 py-3">
                            <span class="text-slate-300">Database</span>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Connected</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-800/70 bg-slate-900/70 p-6 shadow-lg shadow-slate-950/30">
                    <h3 class="text-lg font-semibold text-slate-100">Quick Actions</h3>
                    <div class="mt-5 space-y-3">
                        <button class="w-full rounded-xl bg-blue-600 px-4 py-3 font-semibold text-white transition hover:bg-blue-700">Approve Companies</button>
                        <button class="w-full rounded-xl border border-slate-700 bg-slate-900/60 px-4 py-3 font-semibold text-slate-200 transition hover:bg-slate-800">Add Recruiter</button>
                        <button class="w-full rounded-xl border border-slate-700 bg-slate-900/60 px-4 py-3 font-semibold text-slate-200 transition hover:bg-slate-800">Export Data</button>
                    </div>
                </div>

                <div class="rounded-3xl border border-blue-200 bg-linear-to-br from-blue-600 to-slate-900 p-6 text-white shadow-lg shadow-blue-200/50">
                    <h3 class="text-lg font-semibold">Live Tracking Notes</h3>
                    <p class="mt-2 text-sm text-blue-100">The charts update by range and the cards summarize current hiring performance.</p>
                    <div class="mt-6 grid gap-3 text-sm sm:grid-cols-3 xl:grid-cols-1">
                        <div class="rounded-2xl bg-white/10 p-4 backdrop-blur"><p class="text-blue-100">Shortlist rate</p><p class="mt-1 text-2xl font-bold">42%</p></div>
                        <div class="rounded-2xl bg-white/10 p-4 backdrop-blur"><p class="text-blue-100">Offer velocity</p><p class="mt-1 text-2xl font-bold">3.1d</p></div>
                        <div class="rounded-2xl bg-white/10 p-4 backdrop-blur"><p class="text-blue-100">Quality score</p><p class="mt-1 text-2xl font-bold">94</p></div>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection