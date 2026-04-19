@extends('layouts.admin')

@section('title', 'Analytics - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Conversion rate</p><h2 class="mt-3 text-3xl font-bold">8.4%</h2><p class="mt-2 text-emerald-600 text-sm">+1.1%</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Time to hire</p><h2 class="mt-3 text-3xl font-bold">21d</h2><p class="mt-2 text-slate-500 text-sm">Average across platform</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Offer acceptance</p><h2 class="mt-3 text-3xl font-bold">76%</h2><p class="mt-2 text-emerald-600 text-sm">Strong close rate</p></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Source efficiency</p><h2 class="mt-3 text-3xl font-bold">4.6x</h2><p class="mt-2 text-blue-600 text-sm">Best source ROI</p></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Geo performance</h3><p class="text-sm text-slate-500">Sample hiring activity by region</p></div><span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">Global</span></div>
                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl bg-slate-50 p-4"><p class="text-sm text-slate-500">North America</p><p class="mt-2 text-2xl font-bold">4,820</p></div>
                    <div class="rounded-2xl bg-slate-50 p-4"><p class="text-sm text-slate-500">Europe</p><p class="mt-2 text-2xl font-bold">3,640</p></div>
                    <div class="rounded-2xl bg-slate-50 p-4"><p class="text-sm text-slate-500">APAC</p><p class="mt-2 text-2xl font-bold">2,310</p></div>
                    <div class="rounded-2xl bg-slate-50 p-4"><p class="text-sm text-slate-500">LATAM</p><p class="mt-2 text-2xl font-bold">1,040</p></div>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Source mix</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>Referral</span><span>34%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[34%] rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Job boards</span><span>29%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[29%] rounded-full bg-sky-400"></div></div></div>
                    <div><div class="flex justify-between"><span>Career site</span><span>21%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[21%] rounded-full bg-emerald-500"></div></div></div>
                    <div><div class="flex justify-between"><span>Social</span><span>16%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[16%] rounded-full bg-slate-400"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection