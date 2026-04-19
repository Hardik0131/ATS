@extends('layouts.site')

@section('title', 'About | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.18em] text-teal-700">ABOUT HIREFLOW</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Built for hiring teams that move fast and hire right.</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">HireFlow combines ATS workflows, interview coordination, and analytics into one hiring command center so teams can collaborate without chaos.</p>
        </div>
        <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1400&q=80" alt="Team collaboration in office" class="h-[360px] w-full rounded-3xl object-cover shadow-lg">
    </section>

    <section class="mx-auto mt-16 max-w-7xl px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-slate-900">What drives us</h2>
        <div class="mt-6 grid gap-6 md:grid-cols-3">
            <article class="card rounded-2xl border border-slate-200">
                <h3 class="text-xl font-semibold text-slate-900">People First</h3>
                <p class="mt-2 text-slate-600">Hiring is about people, not pipeline clutter. We design for recruiter and candidate experience.</p>
            </article>
            <article class="card rounded-2xl border border-slate-200">
                <h3 class="text-xl font-semibold text-slate-900">Execution Speed</h3>
                <p class="mt-2 text-slate-600">Automations and clean workflows help teams reduce delays and close top candidates faster.</p>
            </article>
            <article class="card rounded-2xl border border-slate-200">
                <h3 class="text-xl font-semibold text-slate-900">Data Clarity</h3>
                <p class="mt-2 text-slate-600">Every hiring decision is backed by clear, actionable recruiting insights.</p>
            </article>
        </div>
    </section>
</main>
@endsection
