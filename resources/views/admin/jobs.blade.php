@extends('layouts.admin')

@section('title', 'Jobs - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Live jobs</p><h2 class="mt-3 text-3xl font-bold">3,965</h2><p class="mt-2 text-sm text-emerald-600">+9% this month</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Drafts</p><h2 class="mt-3 text-3xl font-bold">241</h2><p class="mt-2 text-sm text-slate-500">Awaiting publish</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Expired</p><h2 class="mt-3 text-3xl font-bold">88</h2><p class="mt-2 text-sm text-rose-600">Needs follow-up</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Avg. applicants</p><h2 class="mt-3 text-3xl font-bold">142</h2><p class="mt-2 text-sm text-slate-500">Per opening</p></article>
        </section>

        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Published Jobs</h3><p class="text-sm text-slate-500">Recent live postings with sample data</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Create Job</button></div>
            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead><tr class="border-b border-slate-200 text-slate-500"><th class="px-4 py-3 font-medium">Title</th><th class="px-4 py-3 font-medium">Company</th><th class="px-4 py-3 font-medium">Location</th><th class="px-4 py-3 font-medium">Applicants</th><th class="px-4 py-3 font-medium">Status</th></tr></thead>
                    <tbody>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Senior Product Designer</td><td class="px-4 py-4 text-slate-600">CloudPeak</td><td class="px-4 py-4 text-slate-600">Remote</td><td class="px-4 py-4 text-slate-600">284</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Live</span></td></tr>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Engineering Manager</td><td class="px-4 py-4 text-slate-600">Northstar Labs</td><td class="px-4 py-4 text-slate-600">New York</td><td class="px-4 py-4 text-slate-600">132</td><td class="px-4 py-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">Featured</span></td></tr>
                        <tr><td class="px-4 py-4 font-medium">Talent Ops Specialist</td><td class="px-4 py-4 text-slate-600">Vertex Talent</td><td class="px-4 py-4 text-slate-600">London</td><td class="px-4 py-4 text-slate-600">68</td><td class="px-4 py-4"><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Scheduled</span></td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection