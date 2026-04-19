@extends('layouts.site')

@section('title', 'Candidate Experience Blueprint | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">LEARN</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Candidate Experience Blueprint</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">Design a thoughtful hiring journey from first outreach to final decision with communication standards and turnaround goals.</p>
            <a href="{{ route('resources') }}" class="btn-secondary mt-7 inline-flex font-semibold">Back to Resources Hub</a>
        </div>
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1400&q=80" alt="Candidate journey planning" class="h-[340px] w-full rounded-3xl object-cover shadow-lg">
    </section>
</main>
@endsection
