@extends('layouts.recruiter')

@section('title', 'Candidates - HireFlow Recruiter')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">All candidates</p><h2 class="mt-3 text-3xl font-bold">186</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Top match</p><h2 class="mt-3 text-3xl font-bold">98%</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Shortlisted</p><h2 class="mt-3 text-3xl font-bold">42</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Rejected</p><h2 class="mt-3 text-3xl font-bold">71</h2></article>
        </section>

        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Candidate List</h3><p class="text-sm text-slate-500">Static sourcing and screening data</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">Add Candidate</button></div>
            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead><tr class="border-b border-slate-200 text-slate-500"><th class="px-4 py-3 font-medium">Candidate</th><th class="px-4 py-3 font-medium">Role</th><th class="px-4 py-3 font-medium">Source</th><th class="px-4 py-3 font-medium">Stage</th><th class="px-4 py-3 font-medium">Match</th></tr></thead>
                    <tbody>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Olivia Martin</td><td class="px-4 py-4 text-slate-600">Designer</td><td class="px-4 py-4 text-slate-600">Referral</td><td class="px-4 py-4"><span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">Screening</span></td><td class="px-4 py-4 text-slate-600">92%</td></tr>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Ethan Brooks</td><td class="px-4 py-4 text-slate-600">Frontend Engineer</td><td class="px-4 py-4 text-slate-600">LinkedIn</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Interview</span></td><td class="px-4 py-4 text-slate-600">88%</td></tr>
                        <tr><td class="px-4 py-4 font-medium">Sophia Chen</td><td class="px-4 py-4 text-slate-600">Talent Partner</td><td class="px-4 py-4 text-slate-600">Career site</td><td class="px-4 py-4"><span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Shortlisted</span></td><td class="px-4 py-4 text-slate-600">84%</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection