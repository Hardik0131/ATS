@extends('layouts.auth-promo')

@section('title', 'Request a Demo')

@section('content')
    <div class="min-h-screen bg-[#eef1f0] text-slate-800">
        @include('partials.public-navbar')

        <section
            class="relative overflow-hidden bg-[radial-gradient(circle_at_20%_20%,rgba(45,212,191,0.12),transparent_40%),linear-gradient(to_right,rgba(15,23,42,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(15,23,42,0.05)_1px,transparent_1px)] bg-[size:auto,42px_42px,42px_42px]">
            <div class="mx-auto grid max-w-6xl gap-14 px-6 py-16 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-20">
                <div>
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-teal-200 bg-teal-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.16em] text-teal-700">Live
                        Product Tour</span>
                    <h1 class="mt-6 text-5xl font-black leading-[0.98] tracking-tight text-teal-900 sm:text-6xl">Build Better
                        Teams<br>With Less Noise</h1>
                    <p class="mt-6 max-w-xl text-2xl leading-relaxed text-teal-700/85">See how ATSNOVA helps recruiters move
                        faster, align managers, and turn every step of hiring into a clear process.</p>
                    <div class="mt-10 flex flex-wrap items-center gap-3 text-sm font-semibold text-teal-900">
                        <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Global Teams</span>
                        <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Workflow Automation</span>
                        <span class="rounded-xl border border-slate-200 bg-white px-4 py-2">Role-Based Dashboards</span>
                        <span class="text-teal-700/80">Used by talent teams in SaaS, healthcare, and operations-heavy
                            organizations.</span>
                    </div>
                </div>

                <div class="rounded-2xl border border-teal-100 bg-white p-7 shadow-[0_28px_70px_rgba(8,47,73,0.15)]">
                    <h2 class="text-3xl font-black tracking-tight text-teal-900">Book Your ATSNOVA Demo</h2>
                    <p class="mt-2 text-base text-teal-800/70">Share a few details and our product specialist will tailor
                        the walkthrough to your workflow.</p>

                    @if (session('demo_success'))
                        <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                            {{ session('demo_success') }}
                        </div>
                    @endif

                    <form class="mt-6 space-y-4" method="POST" action="{{ route('request-demo.store') }}">
                        @csrf
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Work Email"
                            class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                            required>
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <div class="grid gap-4 sm:grid-cols-2">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name"
                                class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                                required>
                            @error('first_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name"
                                class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                                required>
                            @error('last_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name"
                            class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                            required>
                        @error('company_name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror

                        <input type="text" name="job_title" value="{{ old('job_title') }}" placeholder="Job Title"
                            class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                            required>
                        @error('job_title')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror


                        <input type="tel" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number"
                            class="w-full rounded-xl border border-teal-100 bg-white px-4 py-3 text-base text-slate-800 placeholder:text-slate-400 focus:border-teal-400 focus:ring-2 focus:ring-teal-200"
                            required>
                        @error('phone_number')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror


                        <label class="flex items-start gap-2 text-sm text-teal-900">
                            <input type="checkbox" name="wants_updates" value="1" {{ old('wants_updates') ? 'checked' : '' }} class="mt-1 rounded border-slate-300 text-teal-600 focus:ring-teal-500">
                            <span>Send me practical hiring playbooks and release updates</span>
                        </label>

                        <p class="text-xs leading-relaxed text-slate-500">This site is protected by reCAPTCHA.</p>
                        <p class="text-xs leading-relaxed text-slate-500">By signing up to receive communications, you agree
                            to our <a href="#" class="font-semibold text-teal-700 hover:text-teal-600">Privacy
                                Policy</a>.</p>

                        <button type="submit"
                            class="w-full rounded-xl bg-teal-700 px-5 py-3.5 text-base font-bold text-white transition hover:bg-teal-800">Schedule
                            My Demo</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-6xl px-6 py-20 text-center">
            <h3 class="text-5xl font-black tracking-tight text-teal-900">Chosen by Ambitious Hiring Teams</h3>
            <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-7">
                @foreach (['Fast Setup', 'Smart Scoring', 'Pipeline Clarity', 'Hiring Quality', 'Data Visibility', 'Plug-and-Play', 'Enterprise Ready'] as $badge)
                    <div class="rounded-xl border border-slate-200 bg-white px-3 py-5 text-sm font-semibold text-slate-700">
                        {{ $badge }}</div>
                @endforeach
            </div>
        </section>

        <section class="bg-[radial-gradient(circle_at_50%_-40%,rgba(20,184,166,0.12),transparent_55%)] px-6 py-20">
            <div class="mx-auto max-w-6xl">
                <h3 class="text-center text-5xl font-black tracking-tight text-teal-900">What Recruiting Teams Say About
                    ATSNOVA</h3>
                <div class="mt-12 grid gap-6 lg:grid-cols-2">
                    @foreach ([['quote' => 'ATSNOVA gave us a cleaner process in week one. Our hiring managers finally see status updates without asking for spreadsheets.', 'name' => 'Nadia K.', 'role' => 'Head of People Operations'], ['quote' => 'Interview feedback is now structured and fast. We moved from chaotic threads to one clear workflow for every role.', 'name' => 'Rohan P.', 'role' => 'Senior Recruiter'], ['quote' => 'Automation removed repetitive admin work, and our team now spends more time talking to strong candidates.', 'name' => 'Camila D.', 'role' => 'Talent Lead'], ['quote' => 'The analytics view helped us spot bottlenecks quickly and improve offer acceptance in just one quarter.', 'name' => 'Marcus T.', 'role' => 'Director of Hiring']] as $review)
                        <article class="rounded-2xl border border-teal-100 bg-white p-8 shadow-sm">
                            <p class="text-lg leading-relaxed text-teal-800/90">"{{ $review['quote'] }}"</p>
                            <div class="mt-7 border-t border-teal-100 pt-5">
                                <p class="font-semibold text-teal-900">{{ $review['name'] }}</p>
                                <p class="text-sm text-teal-700/70">{{ $review['role'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-4xl px-6 py-20">
            <h3 class="text-center text-5xl font-black tracking-tight text-teal-900">Demo FAQ: What You Will Learn in 30
                Minutes</h3>
            <div class="mt-10 divide-y divide-teal-100 rounded-2xl border border-teal-100 bg-white">
                @foreach (['What does the live ATSNOVA demo include?', 'How does scorecard automation improve hiring quality?', 'Can I map your pipeline to our existing process?', 'Which integrations are available in the standard plan?', 'How does ATSNOVA support multi-brand or multi-region teams?'] as $faq)
                    <details class="group px-6 py-5">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 text-lg font-semibold text-teal-900">
                            <span>{{ $faq }}</span>
                            <span class="text-3xl leading-none text-teal-700 transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600">Each session is configured around
                            your team setup, open roles, approval flow, and reporting needs so you can evaluate real-world
                            fit immediately.</p>
                    </details>
                @endforeach
            </div>
        </section>

        <section class="bg-[linear-gradient(145deg,#0a5f58,#123e4b)] px-6 py-20 text-white">
            <div class="mx-auto max-w-4xl text-center">
                <h3 class="text-6xl font-black tracking-tight">Ready to Upgrade Your Hiring Engine?</h3>
                <p class="mt-5 text-xl text-white/80">Meet our team, preview your ideal workflow, and launch with
                    confidence.</p>
                <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                    <button
                        class="rounded-full bg-white px-8 py-3 text-lg font-bold text-teal-800 transition hover:bg-teal-100">Start
                        Demo Booking</button>
                    <a href="tel:+18005550194"
                        class="rounded-full border border-white/30 px-8 py-3 text-lg font-semibold text-white transition hover:border-white hover:bg-white/10">Call
                        (800) 555-0194</a>
                </div>
            </div>
        </section>

        <footer class="bg-black px-6 py-14 text-white">
            <div class="mx-auto max-w-6xl border-t border-white/20 pt-10">
                <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-5">
                    <div>
                        <h4 class="text-sm font-semibold text-white/85">Product</h4>
                        <ul class="mt-4 space-y-2 text-sm text-white/70">
                            <li>Applicant Tracking</li>
                            <li>Panel Collaboration</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-white/85">Explore</h4>
                        <ul class="mt-4 space-y-2 text-sm text-white/70">
                            <li><a href="{{ route('pricing') }}" class="hover:text-white">Pricing</a></li>
                            <li><a href="{{ route('request-demo') }}" class="hover:text-white">Request a Demo</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-white/85">Resources</h4>
                        <ul class="mt-4 space-y-2 text-sm text-white/70">
                            <li>Hiring Benchmarks</li>
                            <li>Implementation Guide</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-white/85">Company</h4>
                        <ul class="mt-4 space-y-2 text-sm text-white/70">
                            <li>About ATSNOVA</li>
                            <li>Customer Stories</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-white/85">Connect</h4>
                        <div class="mt-4 flex items-center gap-3 text-sm text-white/70">
                            <span>LinkedIn</span>
                            <span>YouTube</span>
                            <span>X</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
