@extends('layouts.site')

@section('title', 'Hiring Operations Starter Pack | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">FEATURED RESOURCE</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Hiring Operations Starter Pack</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">A starter bundle with scorecards, recruiter handoff templates, intake agenda, and weekly reporting format to launch a clean hiring process quickly.</p>
            <a href="{{ route('contact') }}" class="btn-primary mt-7 inline-flex font-semibold">Request This Pack</a>
        </div>
        <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1400&q=80" alt="Resource toolkit visual" class="h-[340px] w-full rounded-3xl object-cover shadow-lg">
    </section>
</main>
@endsection
