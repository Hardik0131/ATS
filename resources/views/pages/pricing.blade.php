@extends('layouts.site')

@section('title', 'Pricing | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <p class="text-sm font-semibold tracking-[0.18em] text-teal-700">PRICING</p>
        <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Simple plans for every hiring stage.</h1>
        <p class="mx-auto mt-5 max-w-2xl text-lg text-slate-600">Choose a plan that fits your team size and hiring velocity.</p>

        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            <article class="card rounded-2xl border border-slate-200">
                <h3 class="text-xl font-semibold">Starter</h3>
                <p class="mt-2 text-4xl font-bold text-teal-700">$49<span class="text-base text-slate-500">/mo</span></p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li>Up to 5 active jobs</li>
                    <li>Candidate pipeline</li>
                    <li>Email support</li>
                </ul>
                <button class="btn-secondary mt-6 w-full font-semibold" type="button">Choose Starter</button>
            </article>
            <article class="card rounded-2xl border-2 border-teal-300 shadow-lg">
                <p class="mb-2 text-sm font-semibold text-teal-700">MOST POPULAR</p>
                <h3 class="text-xl font-semibold">Growth</h3>
                <p class="mt-2 text-4xl font-bold text-teal-700">$129<span class="text-base text-slate-500">/mo</span></p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li>Unlimited jobs</li>
                    <li>Interview scheduling</li>
                    <li>Analytics dashboard</li>
                </ul>
                <button class="btn-primary mt-6 w-full font-semibold" type="button">Choose Growth</button>
            </article>
            <article class="card rounded-2xl border border-slate-200">
                <h3 class="text-xl font-semibold">Enterprise</h3>
                <p class="mt-2 text-4xl font-bold text-teal-700">Custom</p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li>Advanced automation</li>
                    <li>SSO and security controls</li>
                    <li>Dedicated success manager</li>
                </ul>
                <button class="btn-secondary mt-6 w-full font-semibold" type="button">Contact Sales</button>
            </article>
        </div>
    </section>
</main>
@endsection
