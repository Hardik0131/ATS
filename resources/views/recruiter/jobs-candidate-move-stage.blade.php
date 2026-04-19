@extends('layouts.recruiter')

@section('title', 'Move Stage - HireFlow Recruiter')

@section('content')
    @php
        $jobSlug = request('job', 'senior-product-designer');
        $candidateSlug = request('candidate', 'ava-thompson');
        $currentStage = request('current_stage', 'interview');

        $jobTitle = str($jobSlug)->replace('-', ' ')->title();
        $candidateName = str($candidateSlug)->replace('-', ' ')->title();
        $currentStageLabel = str($currentStage)->replace('-', ' ')->title();

        $stageFlow = [
            ['key' => 'applied', 'label' => 'Applied', 'desc' => 'Application received and waiting for initial review.'],
            ['key' => 'screening', 'label' => 'Screening', 'desc' => 'Recruiter pre-screen and resume check.'],
            ['key' => 'interview', 'label' => 'Interview', 'desc' => 'Candidate in interview rounds with hiring team.'],
            ['key' => 'offer', 'label' => 'Offer', 'desc' => 'Offer package prepared and shared.'],
            ['key' => 'hired', 'label' => 'Hired', 'desc' => 'Candidate accepted and joined.'],
            ['key' => 'rejected', 'label' => 'Rejected', 'desc' => 'Candidate is not moving forward.'],
        ];
    @endphp

    <div class="mx-auto max-w-7xl space-y-6">
        <section class="rounded-3xl border border-slate-800/70 bg-linear-to-r from-slate-950 via-slate-900 to-blue-900 p-6 text-white shadow-xl shadow-slate-950/30 lg:p-8">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-200">Move Candidate Stage</p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight">{{ $candidateName }}</h2>
                    <p class="mt-2 text-sm text-slate-300 sm:text-base">Role: {{ $jobTitle }} • Current stage: {{ $currentStageLabel }}</p>
                </div>
                <a href="{{ route('recruiter.jobs.candidate.profile', ['job' => $jobSlug, 'candidate' => $candidateSlug]) }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/20 bg-white/10 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">Back to profile</a>
            </div>
        </section>

        <section class="grid gap-6 lg:grid-cols-[minmax(0,1fr),320px]">
            <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-xl font-bold text-slate-900">Select next stage</h3>
                <p class="mt-2 text-sm text-slate-600">Demo UI only. This page does not persist changes to the database yet.</p>

                <form action="#" method="POST" class="mt-5 space-y-3">
                    @csrf
                    @foreach ($stageFlow as $stage)
                        <label class="flex cursor-pointer items-start gap-3 rounded-2xl border border-slate-200 p-4 transition hover:border-blue-300 hover:bg-blue-50/40">
                            <input type="radio" name="next_stage" value="{{ $stage['key'] }}" class="mt-1 h-4 w-4 border-slate-300 text-blue-600 focus:ring-blue-600" {{ $currentStage === $stage['key'] ? 'checked' : '' }}>
                            <span>
                                <span class="block text-sm font-semibold text-slate-900">{{ $stage['label'] }}</span>
                                <span class="mt-1 block text-sm text-slate-600">{{ $stage['desc'] }}</span>
                            </span>
                        </label>
                    @endforeach

                    <div>
                        <label for="stage_note" class="mb-2 block text-sm font-semibold text-slate-700">Recruiter note</label>
                        <textarea id="stage_note" name="stage_note" rows="4" placeholder="Add context for this stage move..." class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20"></textarea>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-1">
                        <button type="button" class="rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">Confirm move</button>
                        <a href="{{ route('recruiter.jobs.candidates', ['job' => $jobSlug]) }}" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Cancel</a>
                    </div>
                </form>
            </article>

            <aside class="space-y-4 lg:sticky lg:top-24 lg:self-start">
                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Quick Summary</p>
                    <dl class="mt-3 space-y-3 text-sm text-slate-700">
                        <div class="flex items-center justify-between gap-3">
                            <dt class="text-slate-500">Candidate</dt>
                            <dd class="font-semibold text-slate-900">{{ $candidateName }}</dd>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <dt class="text-slate-500">Role</dt>
                            <dd class="font-semibold text-slate-900">{{ $jobTitle }}</dd>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <dt class="text-slate-500">Current</dt>
                            <dd class="font-semibold text-slate-900">{{ $currentStageLabel }}</dd>
                        </div>
                    </dl>
                </article>

                <article class="rounded-2xl border border-amber-100 bg-amber-50 p-5">
                    <h4 class="text-sm font-semibold text-amber-900">Demo notice</h4>
                    <p class="mt-2 text-sm text-amber-800">This page demonstrates stage movement UI. Connect it to a real update endpoint when you are ready to persist stage changes.</p>
                </article>
            </aside>
        </section>
    </div>
@endsection
