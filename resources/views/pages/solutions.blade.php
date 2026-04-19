@extends('layouts.site')

@section('title', 'Solutions | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-display text-5xl font-bold text-slate-900">Solutions for modern hiring teams</h1>
        <p class="mt-4 max-w-3xl text-lg text-slate-600">From high-volume recruiting to executive hiring, HireFlow adapts to your workflow.</p>
        <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">Recruitment Marketing</h3><p class="mt-2 text-slate-600">Attract better candidates with branded job pages and campaign tracking.</p></article>
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">High-Volume Hiring</h3><p class="mt-2 text-slate-600">Screen and move candidates quickly with automation and bulk actions.</p></article>
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">Diversity Hiring</h3><p class="mt-2 text-slate-600">Build inclusive pipelines and fair, consistent evaluation processes.</p></article>
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">Analytics</h3><p class="mt-2 text-slate-600">Measure conversion rates and identify bottlenecks by stage.</p></article>
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">Communication</h3><p class="mt-2 text-slate-600">Coordinate recruiters, hiring managers, and candidates in one place.</p></article>
            <article class="card rounded-2xl border border-slate-200"><h3 class="text-xl font-semibold">Career Site Builder</h3><p class="mt-2 text-slate-600">Launch conversion-focused careers pages without engineering effort.</p></article>
        </div>
    </section>
</main>
@endsection
