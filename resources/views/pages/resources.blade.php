@extends('layouts.site')

@section('title', 'Resources | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-display text-5xl font-bold text-slate-900">Resources Menu Hub</h1>
        <p class="mt-4 max-w-3xl text-lg text-slate-600">This page is organized the same way as the Resources hover menu, so each menu item lands here clearly.</p>

        <div class="mt-10 grid gap-8 lg:grid-cols-3">
            <div id="learn" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-1">
                <p class="text-xs font-semibold tracking-[0.14em] text-slate-500">LEARN</p>
                <ul class="mt-4 space-y-3 text-lg text-slate-800">
                    <li><a href="{{ route('resources.weekly-hiring-brief') }}" class="hover:text-teal-700">Weekly Hiring Brief</a></li>
                    <li><a href="{{ route('resources.structured-interview-kit') }}" class="hover:text-teal-700">Structured Interview Kit</a></li>
                    <li><a href="{{ route('resources.candidate-experience-blueprint') }}" class="hover:text-teal-700">Candidate Experience Blueprint</a></li>
                </ul>
            </div>

            <div id="connect" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-1">
                <p class="text-xs font-semibold tracking-[0.14em] text-slate-500">CONNECT</p>
                <ul class="mt-4 space-y-3 text-lg text-slate-800">
                    <li><a href="{{ route('resources.talent-ops-academy') }}" class="hover:text-teal-700">Talent Ops Academy</a></li>
                    <li><a href="{{ route('resources.live-labs-ama') }}" class="hover:text-teal-700">Live Labs and AMA</a></li>
                    <li><a href="{{ route('resources.hiring-leader-stories') }}" class="hover:text-teal-700">Hiring Leader Stories</a></li>
                </ul>
            </div>

            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-sm lg:col-span-1">
                <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=900&q=80" alt="Resource card visual" class="h-44 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Hiring Operations Starter Pack</h3>
                    <p class="mt-2 text-slate-600">Templates and workflows your team can use this week.</p>
                    <a href="{{ route('resources.hiring-operations-starter-pack') }}" class="btn-primary mt-4 inline-flex text-sm font-semibold">Open Resource</a>
                </div>
            </article>
        </div>
    </section>
</main>
@endsection
