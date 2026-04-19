@extends('layouts.recruiter')

@section('title', 'Analytics - HireFlow Recruiter')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Conversion rate</p><h2 class="mt-3 text-3xl font-bold">8.4%</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Time to hire</p><h2 class="mt-3 text-3xl font-bold">21d</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Offer acceptance</p><h2 class="mt-3 text-3xl font-bold">76%</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Source ROI</p><h2 class="mt-3 text-3xl font-bold">4.6x</h2></article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">Hiring Trend</h3>
                        <p class="text-sm text-slate-500">Dynamic chart with selectable range</p>
                    </div>
                    <div class="flex gap-2 text-xs font-semibold" data-range-group="recruiter-main">
                        <button type="button" data-range="7d" class="rounded-lg bg-slate-950 px-3 py-1.5 text-white">7D</button>
                        <button type="button" data-range="30d" class="rounded-lg border border-slate-300 px-3 py-1.5 text-slate-700">30D</button>
                        <button type="button" data-range="90d" class="rounded-lg border border-slate-300 px-3 py-1.5 text-slate-700">90D</button>
                    </div>
                </div>
                <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                    <canvas id="recruiter-main-trend-chart" height="220"></canvas>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Source Mix</h3>
                <div class="mt-6">
                    <canvas id="recruiter-main-source-chart" height="220"></canvas>
                </div>
                <div class="mt-6 space-y-4 text-sm">
                    <div class="flex justify-between"><span>Referral</span><span>34%</span></div>
                    <div class="flex justify-between"><span>Job boards</span><span>29%</span></div>
                    <div class="flex justify-between"><span>Career site</span><span>21%</span></div>
                </div>
            </article>
        </section>

        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <h3 class="text-lg font-semibold">Pipeline Conversion</h3>
            <p class="text-sm text-slate-500">Applied to hired stage movement</p>
            <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <canvas id="recruiter-main-funnel-chart" height="160"></canvas>
            </div>
        </section>
    </div>
@endsection