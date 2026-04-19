@extends('layouts.auth-promo')

@section('title', 'Registration Received')

@section('content')
<div class="min-h-screen bg-[radial-gradient(circle_at_20%_10%,rgba(45,212,191,0.16),transparent_35%),radial-gradient(circle_at_90%_90%,rgba(59,130,246,0.12),transparent_35%),#eef1f0] text-slate-800">
    @include('partials.public-navbar')

    <main class="px-6 py-14 sm:py-18 lg:px-8">
        <div class="mx-auto max-w-5xl">
            <section class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-[0_24px_70px_rgba(15,23,42,0.16)]">
                <div class="absolute inset-0 pointer-events-none bg-[linear-gradient(120deg,rgba(16,185,129,0.08),transparent_45%,rgba(37,99,235,0.08))]"></div>

                <div class="relative grid gap-8 p-8 sm:p-12 lg:grid-cols-[1.2fr_0.8fr]">
                    <div>
                        <p class="inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.16em] text-emerald-700">
                            Registration Successful
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        </p>

                        <h1 class="mt-5 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
                            Your Request Is In Queue
                        </h1>

                        <p class="mt-5 max-w-2xl text-lg leading-relaxed text-slate-600">
                            Thank you for registering with HireFlow. Our onboarding team will contact you within 24 hours to complete your setup and share next steps.
                        </p>

                        <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-5">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">What Happens Next</p>
                            <ul class="mt-3 space-y-3 text-sm text-slate-700">
                                <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-teal-500"></span>Profile verification by our onboarding specialist</li>
                                <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-teal-500"></span>Initial workspace configuration guidance</li>
                                <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-teal-500"></span>Platform walkthrough scheduling</li>
                            </ul>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="{{ route('home') }}" class="btn-primary text-sm font-semibold">Back to Home</a>
                            <a href="{{ route('request-demo') }}" class="btn-secondary text-sm font-semibold">View Demo Page</a>
                        </div>
                    </div>

                    <aside class="space-y-4">
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Estimated Response Time</p>
                            <p class="mt-2 text-3xl font-black text-slate-900">Within 24 Hours</p>
                            <p class="mt-2 text-sm text-slate-600">Monday to Saturday during business hours.</p>
                        </article>

                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Contact Number</p>
                            <a href="tel:+18885551212" class="mt-2 inline-block text-xl font-bold text-slate-900 hover:text-teal-700">(888) 555-1212</a>
                            <p class="mt-2 text-sm text-slate-600">Talk directly with our onboarding desk.</p>
                        </article>

                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Support Email</p>
                            <a href="mailto:support@hireflow.com" class="mt-2 inline-block break-all text-lg font-bold text-slate-900 hover:text-teal-700">support@hireflow.com</a>
                            <p class="mt-2 text-sm text-slate-600">Share questions and our team will reply quickly.</p>
                        </article>
                    </aside>
                </div>
            </section>
        </div>
    </main>
</div>
@endsection
