@extends('layouts.admin')

@section('title', 'Recruiters - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Active recruiters</p><h2 class="mt-3 text-3xl font-bold">1,120</h2><p class="mt-2 text-sm text-emerald-600">+64 this week</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Verified agencies</p><h2 class="mt-3 text-3xl font-bold">412</h2><p class="mt-2 text-sm text-slate-500">Across 18 countries</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Average response time</p><h2 class="mt-3 text-3xl font-bold">18m</h2><p class="mt-2 text-sm text-emerald-600">Fastest in 30 days</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Pending approval</p><h2 class="mt-3 text-3xl font-bold">28</h2><p class="mt-2 text-sm text-amber-600">Needs moderation</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Recruiter Network</h3><p class="text-sm text-slate-500">Performance sample data</p></div><button class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold">Export CSV</button></div>
                <div class="mt-6 space-y-4">
                    <div class="flex items-center gap-4 rounded-2xl bg-slate-50 p-4"><div class="h-12 w-12 rounded-full bg-blue-600 text-center font-bold leading-[3rem] text-white">SK</div><div><p class="font-semibold">Sarah Khan</p><p class="text-sm text-slate-500">Atlas Hiring Co.</p></div><div class="ml-auto text-right"><p class="font-semibold">94%</p><p class="text-xs text-slate-500">Fill rate</p></div></div>
                    <div class="flex items-center gap-4 rounded-2xl bg-slate-50 p-4"><div class="h-12 w-12 rounded-full bg-slate-800 text-center font-bold leading-[3rem] text-white">MP</div><div><p class="font-semibold">Marcus Lee</p><p class="text-sm text-slate-500">Vertex Talent</p></div><div class="ml-auto text-right"><p class="font-semibold">88%</p><p class="text-xs text-slate-500">Fill rate</p></div></div>
                    <div class="flex items-center gap-4 rounded-2xl bg-slate-50 p-4"><div class="h-12 w-12 rounded-full bg-emerald-600 text-center font-bold leading-[3rem] text-white">JR</div><div><p class="font-semibold">Jasmine Reed</p><p class="text-sm text-slate-500">Northstar Labs</p></div><div class="ml-auto text-right"><p class="font-semibold">81%</p><p class="text-xs text-slate-500">Fill rate</p></div></div>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Top metrics</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>Client retention</span><span>92%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[92%] rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Candidate response</span><span>74%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[74%] rounded-full bg-sky-400"></div></div></div>
                    <div><div class="flex justify-between"><span>Job publish speed</span><span>89%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[89%] rounded-full bg-emerald-500"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection