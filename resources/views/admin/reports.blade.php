@extends('layouts.admin')

@section('title', 'Reports - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Generated reports</p><h2 class="mt-3 text-3xl font-bold">84</h2><p class="mt-2 text-sm text-slate-500">This month</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Exports</p><h2 class="mt-3 text-3xl font-bold">312</h2><p class="mt-2 text-sm text-emerald-600">CSV and PDF</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Shared links</p><h2 class="mt-3 text-3xl font-bold">65</h2><p class="mt-2 text-sm text-blue-600">Across teams</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Scheduled reports</p><h2 class="mt-3 text-3xl font-bold">18</h2><p class="mt-2 text-sm text-slate-500">Weekly cadence</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Report library</h3><p class="text-sm text-slate-500">Downloadable admin reports</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">New report</button></div>
                <div class="mt-6 space-y-3">
                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-4"><div><p class="font-semibold">Hiring funnel summary</p><p class="text-sm text-slate-500">PDF, updated 2 hours ago</p></div><button class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold">Download</button></div>
                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-4"><div><p class="font-semibold">Recruiter performance</p><p class="text-sm text-slate-500">CSV, updated today</p></div><button class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold">Download</button></div>
                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-4"><div><p class="font-semibold">Compliance audit</p><p class="text-sm text-slate-500">PDF, scheduled weekly</p></div><button class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold">Download</button></div>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Trend alerts</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div class="rounded-2xl bg-amber-50 p-4"><p class="font-semibold text-amber-900">Interview drop-off increased</p><p class="mt-1 text-amber-800/80">+6% compared with last week</p></div>
                    <div class="rounded-2xl bg-blue-50 p-4"><p class="font-semibold text-blue-900">Top source shifted</p><p class="mt-1 text-blue-800/80">Referral traffic grew 14%</p></div>
                </div>
            </article>
        </section>
    </div>
@endsection