@extends('layouts.site')

@section('title', 'Apply - Senior Product Designer | HireFlow Jobs')

@section('content')
    <main class="bg-slate-50 pb-16">
        <section class="bg-linear-to-r from-teal-700 via-cyan-700 to-slate-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
                <p class="text-sm font-semibold tracking-[0.16em] text-cyan-200">DEMO APPLICATION FORM</p>
                <h1 class="font-display mt-3 text-4xl font-bold sm:text-5xl">Apply for Senior Product Designer</h1>
                <p class="mt-3 max-w-3xl text-base text-cyan-100 sm:text-lg">
                    This is a public demo form for your jobs experience. No data is stored yet, but the layout is ready for
                    backend integration.
                </p>
            </div>
        </section>

        <section class="mx-auto mt-10 grid max-w-7xl gap-8 px-6 lg:grid-cols-[minmax(0,1fr),320px] lg:px-8">
            <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
                @if($errors->any())
                    <div class="alert-message flex items-start justify-between gap-3 rounded-2xl border border-red-500/40 bg-red-500/10 px-4 py-3 text-sm text-red-300" role="alert" aria-live="assertive">
                        <div>
                            <p class="font-medium">Please fix the following errors:</p>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-red-300">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="alert-close shrink-0 text-red-300 transition hover:text-red-200" aria-label="Close alert">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert-message flex items-start justify-between gap-3 rounded-2xl border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-800"
                        role="status" aria-live="polite">
                        <span>{{ session('success') }}</span>
                        <button type="button"
                            class="alert-close shrink-0 text-emerald-300 transition hover:text-emerald-800"
                            aria-label="Close alert">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @elseif (session('error'))
                    <div class="alert-message flex items-start justify-between gap-3 rounded-2xl border border-red-500/40 bg-red-500/10 px-4 py-3 text-sm text-red-300"
                        role="alert" aria-live="assertive">
                        <span>{{ session('error') }}</span>
                        <button type="button" class="alert-close shrink-0 text-red-300 transition hover:text-red-200"
                            aria-label="Close alert">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                @endif
                <form action="{{ route('jobs.apply.store', $listing->slug) }}" method="POST" class="space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="mb-2 block text-sm flex font-semibold text-slate-700"
                                name="first_name">First name <p class="text-red-700">*</p></label>
                            <input id="first_name" name="first_name" type="text" placeholder="Jane"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('first_name') }}">
                            @error('first_name')
                                <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                    <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="mb-2 flex block text-sm font-semibold text-slate-700"
                                name="last_name">Last name <p class="text-red-700">*</p></label>
                            <input id="last_name" name="last_name" type="text" placeholder="Smith"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('last_name') }}">
                            @error('last_name')
                                <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                    <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="email" class="mb-2 block text-sm flex font-semibold text-slate-700"
                                name="email">Email <p class="text-red-700">*</p></label>
                            <input id="email" name="email" type="email" placeholder="jane@email.com"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                    <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="mb-2 block text-sm font-semibold text-slate-700"
                                name="mobile_number">Phone</label>
                            <input id="phone" name="mobile_number" type="tel" placeholder="+62 812 0000 0000"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('mobile_number') }}">
                            @error('mobile_number')
                                <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                    <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="location" class="mb-2 flex block text-sm font-semibold text-slate-700"
                            name="current_location">Current location <p class="text-red-700">*</p></label>
                        <input id="location" name="current_location" type="text" placeholder="Jakarta, Indonesia"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                            value="{{ old('current_location') }}">
                        @error('current_location')
                            <p class="flex items-center gap-2 text-sm font-medium" style="color: #ef4444;" data-field-error>
                                <span aria-hidden="true">&#9432;</span><span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="portfolio_url" class="mb-2 block text-sm font-semibold text-slate-700"
                                name="portfolio_url">Portfolio URL</label>
                            <input id="portfolio_url" name="portfolio_url" type="url"
                                placeholder="https://portfolio.com"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('portfolio_url') }}">
                        </div>
                        <div>
                            <label for="linkedin_url" class="mb-2 block text-sm font-semibold text-slate-700"
                                name="linkedin_url">LinkedIn URL</label>
                            <input id="linkedin_url" name="linkedin_url" type="url"
                                placeholder="https://linkedin.com/in/yourname"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200"
                                value="{{ old('linkedin_url') }}">
                        </div>
                    </div>

                    <div>
                        <label for="resume" class="mb-2 block text-sm font-semibold text-slate-700"
                            name="resume">Resume
                            / CV</label>
                        <input id="resume" name="resume" type="file"
                            class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-700 file:mr-4 file:rounded-lg file:border-0 file:bg-slate-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-slate-700">
                        <p class="mt-1 text-xs text-slate-500">PDF or DOCX up to 5MB.</p>
                    </div>

                    <div>
                        <label for="cover_letter" class="mb-2 block text-sm font-semibold text-slate-700"
                            name="cover_letter">Why are you a fit for this role?</label>
                        <textarea id="cover_letter" name="cover_letter" rows="6"
                            placeholder="Share your relevant experience and outcomes..."
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-slate-900 outline-none transition focus:border-teal-500 focus:ring-2 focus:ring-teal-200">{{ old('cover_letter') }}</textarea>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
                        <input id="consent" name="consent" type="checkbox"
                            class="mt-1 h-4 w-4 rounded border-slate-300 text-teal-600 focus:ring-teal-500">
                        <label for="consent" class="text-sm text-slate-600">I agree to be contacted about this
                            application
                            and future opportunities.</label>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        <button type="submit" class="btn-primary cursor-pointer">Submit application</button>
                        <a href="{{ route('jobs.detail', $listing->slug) }}" class="btn-secondary cursor-pointer">Back to
                            job detail</a>
                    </div>
                </form>
            </article>

            <aside class="space-y-5 lg:sticky lg:top-24 lg:self-start">
                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-semibold tracking-[0.14em] text-slate-500">ROLE SUMMARY</p>
                    <h2 class="font-display mt-3 text-xl font-bold text-slate-900">Senior Product Designer</h2>
                    <ul class="mt-3 space-y-2 text-sm text-slate-700">
                        <li>- Full-time, remote</li>
                        <li>- Product Experience team</li>
                        <li>- Salary range: $120k - $145k</li>
                        <li>- Manual review for each application</li>
                    </ul>
                </article>

                <article class="rounded-2xl border border-cyan-100 bg-cyan-50 p-5">
                    <h3 class="font-display text-lg font-bold text-slate-900">Hiring timeline</h3>
                    <ol class="mt-3 space-y-2 text-sm text-slate-700">
                        <li>1. Application review (2-3 days)</li>
                        <li>2. Intro call (30 mins)</li>
                        <li>3. Portfolio walkthrough</li>
                        <li>4. Team interview and offer</li>
                    </ol>
                </article>
            </aside>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Alert close button functionality
            document.querySelectorAll('.alert-close').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const alert = btn.closest('.alert-message');
                    if (alert) {
                        alert.style.animation = 'slideOutUp 0.3s ease-out';
                        setTimeout(function() {
                            alert.remove();
                        }, 300);
                    }
                });
            });
        });
    </script>
@endsection
