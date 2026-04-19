@extends('layouts.site')

@section('title', 'Team | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-display text-5xl font-bold text-slate-900">The team behind HireFlow</h1>
        <p class="mt-4 max-w-3xl text-lg text-slate-600">We are product builders, recruiters, and operators who believe hiring should feel collaborative and human.</p>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80" alt="Team members planning together" class="h-52 w-full object-cover">
                <div class="p-6"><h3 class="text-xl font-semibold">Product Team</h3><p class="mt-2 text-slate-600">Designing simple workflows for complex recruiting operations.</p></div>
            </article>
            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=900&q=80" alt="Recruiting team meeting" class="h-52 w-full object-cover">
                <div class="p-6"><h3 class="text-xl font-semibold">Customer Success</h3><p class="mt-2 text-slate-600">Helping hiring teams implement better practices from day one.</p></div>
            </article>
            <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="People collaborating with laptop" class="h-52 w-full object-cover">
                <div class="p-6"><h3 class="text-xl font-semibold">Engineering</h3><p class="mt-2 text-slate-600">Building performance and reliability at every hiring stage.</p></div>
            </article>
        </div>
    </section>
</main>
@endsection
