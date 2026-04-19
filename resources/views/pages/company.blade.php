@extends('layouts.site')

@section('title', 'Company | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <h1 class="font-display text-5xl font-bold text-slate-900">A company focused on hiring outcomes.</h1>
                <p class="mt-5 text-lg text-slate-600">Our mission is to help teams make faster and more confident hiring decisions with software recruiters actually enjoy using.</p>
                <a href="{{ route('team') }}" class="btn-primary mt-7 inline-flex font-semibold">Meet the Team</a>
            </div>
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1400&q=80" alt="Company team collaboration" class="h-[340px] w-full rounded-3xl object-cover shadow-lg">
        </div>
    </section>
</main>
@endsection
