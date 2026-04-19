@extends('layouts.auth-promo')

@section('title', 'Company Login')

@section('content')
<div class="min-h-screen bg-[#eef1f0] text-slate-800">
    @include('partials.public-navbar')

    <section class="relative overflow-hidden bg-[radial-gradient(circle_at_20%_20%,rgba(45,212,191,0.12),transparent_40%),linear-gradient(to_right,rgba(15,23,42,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(15,23,42,0.05)_1px,transparent_1px)] bg-[size:auto,42px_42px,42px_42px]">
        <div class="mx-auto grid max-w-6xl gap-14 px-6 py-16 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-20">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full border border-teal-200 bg-teal-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.16em] text-teal-700">Workspace Access</span>
                <h1 class="mt-6 text-5xl font-black leading-[0.98] tracking-tight text-teal-900 sm:text-6xl">Welcome Back,<br>Talent Leaders</h1>
                <p class="mt-6 max-w-xl text-2xl leading-relaxed text-teal-700/85">Open your ATSNOVA workspace to review pipeline progress, interview feedback, and hiring goals in one secure dashboard.</p>
                <div class="mt-10 flex flex-wrap items-center gap-3 text-sm font-semibold text-teal-900">
                    <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Pipeline Orchestration</span>
                    <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Interview Kits</span>
                    <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Role Intelligence</span>
                </div>
            </div>

            <div class="rounded-2xl border border-teal-100 bg-white p-7 shadow-[0_28px_70px_rgba(8,47,73,0.15)]">
                <h2 class="text-3xl font-black tracking-tight text-teal-900">Sign In to ATSNOVA</h2>
                <p class="mt-2 text-base text-teal-800/70">Use your organization credentials to continue.</p>

                @if (session('status'))
                    <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Work Email" class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200">
                        @error('email')
                            <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200">
                        @error('password')
                            <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-2 text-sm text-teal-900">
                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-slate-300 text-teal-600 focus:ring-teal-500">
                        <span>Keep me signed in</span>
                    </label>

                    <button type="submit" class="w-full rounded-xl bg-teal-700 px-5 py-3.5 text-base font-bold text-white transition hover:bg-teal-800">Sign In</button>

                    <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="font-semibold text-teal-700 transition hover:text-teal-600">Forgot password?</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-teal-700 transition hover:text-teal-600">Create account</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-6 py-16">
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ([
                ['title' => 'Onboarding Support', 'desc' => 'Need rollout help for teams, roles, and permissions?'],
                ['title' => 'Workflow Support', 'desc' => 'Get help with stages, automations, and approvals.'],
                ['title' => 'Partnership Inquiries', 'desc' => 'Talk with our team about collaboration opportunities.'],
            ] as $card)
                <article class="rounded-2xl border border-teal-100 bg-white p-6 text-center shadow-sm">
                    <h3 class="text-xl font-bold text-teal-900">{{ $card['title'] }}</h3>
                    <p class="mt-2 text-sm text-teal-800/75">{{ $card['desc'] }}</p>
                    <a href="#" class="mt-5 inline-flex text-sm font-semibold text-teal-700 hover:text-teal-600">Learn more</a>
                </article>
            @endforeach
        </div>
    </section>

    <section class="bg-[linear-gradient(145deg,#0a5f58,#123e4b)] px-6 py-16 text-white">
        <div class="mx-auto max-w-4xl text-center">
            <h3 class="text-5xl font-black tracking-tight">Want a Tailored Walkthrough?</h3>
            <p class="mt-4 text-lg text-white/80">Book a focused demo to see how ATSNOVA adapts to your team structure and hiring goals.</p>
            <a href="{{ route('request-demo') }}" class="mt-8 inline-flex rounded-full bg-white px-8 py-3 text-base font-bold text-teal-800 transition hover:bg-teal-100">Book a Demo</a>
        </div>
    </section>
</div>
@endsection
