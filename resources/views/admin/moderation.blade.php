@extends('layouts.admin')

@section('title', 'Moderation - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Flags today</p><h2 class="mt-3 text-3xl font-bold">46</h2><p class="mt-2 text-sm text-amber-600">10 urgent</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Escalations</p><h2 class="mt-3 text-3xl font-bold">12</h2><p class="mt-2 text-sm text-slate-500">Sent to review</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Resolved</p><h2 class="mt-3 text-3xl font-bold">31</h2><p class="mt-2 text-sm text-emerald-600">Closed today</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Auto-blocked</p><h2 class="mt-3 text-3xl font-bold">8</h2><p class="mt-2 text-sm text-rose-600">Spam detection</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Moderation queue</h3><p class="text-sm text-slate-500">Sample content awaiting action</p></div><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Resolve all</button></div>
                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl bg-slate-50 p-4"><div class="flex items-start justify-between gap-4"><div><p class="font-semibold">Northstar Labs company profile</p><p class="text-sm text-slate-500">Missing verification document</p></div><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">High</span></div><div class="mt-4 flex gap-3"><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Approve</button><button class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold">Reject</button></div></div>
                    <div class="rounded-2xl bg-slate-50 p-4"><div class="flex items-start justify-between gap-4"><div><p class="font-semibold">Job listing: Remote SDR</p><p class="text-sm text-slate-500">Contains restricted salary phrasing</p></div><span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">Block</span></div><div class="mt-4 flex gap-3"><button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Review</button><button class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold">Dismiss</button></div></div>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Trust signals</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>Identity verified</span><span>89%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[89%] rounded-full bg-emerald-500"></div></div></div>
                    <div><div class="flex justify-between"><span>Email verified</span><span>96%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[96%] rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Policy compliant</span><span>78%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[78%] rounded-full bg-slate-700"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection