@extends('layouts.site')

@section('title', 'Weekly Hiring Brief | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">LEARN</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Weekly Hiring Brief</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">A concise weekly summary of pipeline health, interview velocity, and offer conversion so teams can act quickly.</p>
            <a href="{{ route('resources') }}" class="btn-secondary mt-7 inline-flex font-semibold">Back to Resources Hub</a>
        </div>
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80" alt="Hiring dashboard report" class="h-[340px] w-full rounded-3xl object-cover shadow-lg">
    </section>
</main>
@endsection
