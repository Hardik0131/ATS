@extends('layouts.site')

@section('title', 'Hiring Leader Stories | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">CONNECT</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Hiring Leader Stories</h1>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">Case-based stories from talent leaders sharing how they improved quality, interviewer alignment, and closing velocity.</p>
            <a href="{{ route('resources') }}" class="btn-secondary mt-7 inline-flex font-semibold">Back to Resources Hub</a>
        </div>
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1400&q=80" alt="Leadership interview conversation" class="h-[340px] w-full rounded-3xl object-cover shadow-lg">
    </section>
</main>
@endsection
