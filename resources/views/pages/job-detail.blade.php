@extends('layouts.site')

@section('title', 'Senior Product Designer | HireFlow Jobs')

@section('content')
    @php
        if ($listing->salary_min > 1000) {
            $listing->salary_min = $listing->salary_min / 1000 . 'K';
        }

        if ($listing->salary_max > 1000) {
            $listing->salary_max = $listing->salary_max / 1000 . 'K';
        }

        if ($listing->salary_currency === 'USD') {
            $formattedSalary = '$' . $listing->salary_min . ' - $' . $listing->salary_max;
        } elseif ($listing->salary_currency === 'EUR') {
            $formattedSalary = '€' . $listing->salary_min . ' - €' . $listing->salary_max;
        } elseif ($listing->salary_currency === 'INR') {
            $formattedSalary = '₹' . $listing->salary_min . ' - ₹' . $listing->salary_max;
        } else {
            $formattedSalary =
                $listing->salary_min .
                ' - ' .
                $listing->salary_max .
                ' ' .
                strtoupper($listing->salary_currency);
        }

        $description = trim($listing->job_description ?? 'No description available.');
        $responsibilities = trim($listing->responsibilities ?? 'No responsibilities listed.');
        $qualifications = trim($listing->qualifications ?? 'No qualifications listed.');
        $skillArray = json_decode($listing->skills ?: '[]', true) ?: [];

        $descriptionItems = array_values(array_filter(array_map('trim', explode('.', $description))));
        $responsibilityItems = array_values(array_filter(array_map('trim', explode('.', $responsibilities))));
        $qualificationItems = array_values(array_filter(array_map('trim', explode('.', $qualifications))));
    @endphp

    <main class="bg-slate-50 pb-16">
        <section class="relative overflow-hidden bg-linear-to-br from-slate-950 via-slate-900 to-teal-900 text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(45,212,191,0.22),transparent_32%),radial-gradient(circle_at_bottom_left,rgba(59,130,246,0.18),transparent_28%)]"></div>
            <div class="relative mx-auto max-w-7xl px-6 py-14 lg:px-8 lg:py-16">
                <div class="max-w-4xl">
                    <p class="text-sm font-semibold tracking-[0.18em] text-teal-300">DEMO JOB DETAIL</p>
                    <h1 class="font-display mt-3 text-4xl font-bold leading-tight sm:text-5xl">{{ ucfirst($listing->job_title) }}</h1>
                    <p class="mt-4 max-w-3xl text-lg text-slate-200">
                        {{ $descriptionItems[0] ?? $description }}
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3 text-sm font-medium">
                        <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2">{{ ucfirst($listing->work_type) }}</span>
                        <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2">{{ ucfirst($listing->employment_type) }}</span>
                        <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2">{{ ucfirst($listing->department) }}</span>
                        <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2">{{ $formattedSalary }}</span>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-3">
                        <a href="{{ route('jobs.apply', $listing->slug) }}" class="btn-primary">Apply for this role</a>
                        <a href="{{ route('contact') }}" class="btn-secondary border-white/30 bg-white/10 text-white hover:bg-white/20">Ask a question</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative z-10 mx-auto mt-0 max-w-7xl px-6 py-10 lg:px-8 lg:py-12">
            <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr),340px]">
                <article class="space-y-8 rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)] sm:p-8">
                    <div>
                        <h2 class="font-display text-2xl font-bold text-slate-900">About the role</h2>
                        @if (count($descriptionItems) > 1)
                            <ul class="mt-4 space-y-3 text-slate-700">
                                @foreach ($descriptionItems as $item)
                                    <li class="flex gap-3">
                                        <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-teal-600"></span>
                                        <span>{{ ucfirst($item) }}.</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mt-4 text-slate-600">{{ ucfirst($description) }}</p>
                        @endif
                    </div>

                    <div>
                        <h3 class="font-display text-xl font-bold text-slate-900">What you will do</h3>
                        <ul class="mt-4 space-y-3 text-slate-700">
                            @forelse ($responsibilityItems as $item)
                                <li class="flex gap-3">
                                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-blue-600"></span>
                                    <span>{{ ucfirst($item) }}.</span>
                                </li>
                            @empty
                                <li class="text-slate-600">{{ ucfirst($responsibilities) }}</li>
                            @endforelse
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-display text-xl font-bold text-slate-900">What we are looking for</h3>
                        <ul class="mt-4 space-y-3 text-slate-700">
                            @forelse ($qualificationItems as $item)
                                <li class="flex gap-3">
                                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-slate-900"></span>
                                    <span>{{ ucfirst($item) }}.</span>
                                </li>
                            @empty
                                <li class="text-slate-600">{{ ucfirst($qualifications) }}</li>
                            @endforelse
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-display text-xl font-bold text-slate-900">Skills needed</h3>
                        <div class="mt-4 flex flex-wrap gap-3">
                            @forelse ($skillArray as $skill)
                                <span class="rounded-xl bg-slate-100 px-4 py-3 text-sm font-medium text-slate-700">{{ strtoupper($skill) }}</span>
                            @empty
                                <span class="rounded-xl bg-slate-100 px-4 py-3 text-sm font-medium text-slate-700">No skills listed</span>
                            @endforelse
                        </div>
                    </div>
                </article>

                <aside class="space-y-5 lg:sticky lg:top-24 lg:self-start">
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-xs font-semibold tracking-[0.14em] text-slate-500">JOB SNAPSHOT</p>
                        <dl class="mt-4 space-y-3 text-sm text-slate-700">
                            <div class="flex items-center justify-between gap-3">
                                <dt class="text-slate-500">Posted</dt>
                                <dd class="font-semibold text-slate-900">{{ $listing->created_at->format('F j, Y') }}</dd>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <dt class="text-slate-500">Close Date</dt>
                                <dd class="font-semibold text-slate-900">{{ \Carbon\Carbon::parse($listing->closing_date)->format('F j, Y') }}</dd>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <dt class="text-slate-500">Team</dt>
                                <dd class="font-semibold text-slate-900">{{ $listing->team->name ?? 'Not specified' }}</dd>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <dt class="text-slate-500">Level</dt>
                                <dd class="font-semibold text-slate-900">{{ ucfirst($listing->experience_level) ?? 'Not specified' }}</dd>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <dt class="text-slate-500">Openings</dt>
                                <dd class="font-semibold text-slate-900">1</dd>
                            </div>
                        </dl>
                    </article>

                    <article class="rounded-2xl border border-teal-100 bg-teal-50 p-5">
                        <h3 class="font-display text-lg font-bold text-slate-900">Ready to apply?</h3>
                        <p class="mt-2 text-sm text-slate-700">Submit your profile in under 3 minutes. We review every application manually.</p>
                        <a href="{{ route('jobs.apply', $listing->slug) }}" class="btn-primary mt-4 inline-flex w-full justify-center">Start application</a>
                    </article>
                </aside>
            </div>
        </section>
    </main>
@endsection
