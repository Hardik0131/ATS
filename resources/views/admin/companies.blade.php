@extends('layouts.admin')

@section('title', 'Companies - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Companies onboarded</p><h2 class="mt-3 text-3xl font-bold">684</h2><p class="mt-2 text-emerald-600 text-sm">+12 this week</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Verified brands</p><h2 class="mt-3 text-3xl font-bold">521</h2><p class="mt-2 text-sm text-slate-500">Pending review: 19</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Enterprise plans</p><h2 class="mt-3 text-3xl font-bold">143</h2><p class="mt-2 text-sm text-blue-600">High-value accounts</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Flagged listings</p><h2 class="mt-3 text-3xl font-bold">8</h2><p class="mt-2 text-sm text-rose-600">Investigate now</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Company registry</h3><p class="text-sm text-slate-500">Sample enterprise list</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Approve selected</button></div>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead><tr class="border-b border-slate-200 text-slate-500"><th class="px-4 py-3 font-medium">Company</th><th class="px-4 py-3 font-medium">Industry</th><th class="px-4 py-3 font-medium">Plan</th><th class="px-4 py-3 font-medium">Status</th></tr></thead>
                        <tbody>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">CloudPeak</td><td class="px-4 py-4 text-slate-600">SaaS</td><td class="px-4 py-4 text-slate-600">Enterprise</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Approved</span></td></tr>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Northstar Labs</td><td class="px-4 py-4 text-slate-600">Staffing</td><td class="px-4 py-4 text-slate-600">Growth</td><td class="px-4 py-4"><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span></td></tr>
                            <tr><td class="px-4 py-4 font-medium">Vertex Talent</td><td class="px-4 py-4 text-slate-600">Recruitment</td><td class="px-4 py-4 text-slate-600">Starter</td><td class="px-4 py-4"><span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">Flagged</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Industry mix</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>SaaS</span><span>38%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[38%] rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Staffing</span><span>27%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[27%] rounded-full bg-sky-400"></div></div></div>
                    <div><div class="flex justify-between"><span>Healthcare</span><span>21%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[21%] rounded-full bg-emerald-500"></div></div></div>
                    <div><div class="flex justify-between"><span>Other</span><span>14%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[14%] rounded-full bg-slate-400"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection