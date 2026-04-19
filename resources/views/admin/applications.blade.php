@extends('layouts.admin')

@section('title', 'Applications - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Applications today</p><h2 class="mt-3 text-3xl font-bold">1,280</h2><p class="mt-2 text-emerald-600 text-sm">+17% from yesterday</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Interview stage</p><h2 class="mt-3 text-3xl font-bold">324</h2><p class="mt-2 text-sm text-slate-500">Awaiting scheduling</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Offers sent</p><h2 class="mt-3 text-3xl font-bold">78</h2><p class="mt-2 text-sm text-blue-600">Top performers</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Rejected</p><h2 class="mt-3 text-3xl font-bold">864</h2><p class="mt-2 text-sm text-rose-600">Filtered by AI</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Recent Applications</h3><p class="text-sm text-slate-500">Candidate sample data</p></div><button class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold">Filter</button></div>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead><tr class="border-b border-slate-200 text-slate-500"><th class="px-4 py-3 font-medium">Candidate</th><th class="px-4 py-3 font-medium">Role</th><th class="px-4 py-3 font-medium">Source</th><th class="px-4 py-3 font-medium">Stage</th></tr></thead>
                        <tbody>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Olivia Martin</td><td class="px-4 py-4 text-slate-600">Senior Designer</td><td class="px-4 py-4 text-slate-600">Referral</td><td class="px-4 py-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">Screening</span></td></tr>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Ethan Brooks</td><td class="px-4 py-4 text-slate-600">Engineering Manager</td><td class="px-4 py-4 text-slate-600">Career Site</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Interview</span></td></tr>
                            <tr><td class="px-4 py-4 font-medium">Sophia Chen</td><td class="px-4 py-4 text-slate-600">Recruiter</td><td class="px-4 py-4 text-slate-600">LinkedIn</td><td class="px-4 py-4"><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Shortlisted</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Funnel</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>Applied</span><span>100%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-full rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Screened</span><span>48%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[48%] rounded-full bg-sky-400"></div></div></div>
                    <div><div class="flex justify-between"><span>Interviewed</span><span>26%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[26%] rounded-full bg-emerald-500"></div></div></div>
                    <div><div class="flex justify-between"><span>Hired</span><span>6%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[6%] rounded-full bg-slate-700"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection