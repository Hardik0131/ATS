@extends('layouts.recruiter')

@section('title', 'Pipeline - HireFlow Recruiter')

@section('content')
    <div class="space-y-6">
        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Pipeline Board</h3><p class="text-sm text-slate-500">The core ATS workflow</p></div><span class="rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">5 stages</span></div>
            <div class="mt-6 overflow-x-auto pb-2">
                <div class="grid min-w-275 grid-cols-5 gap-4">
                    @php
                        $columns = [
                            'Applied' => ['Olivia Martin', 'Ethan Brooks'],
                            'Screening' => ['Sophia Chen', 'Noah Patel'],
                            'Interview' => ['Ava Thompson', 'Liam Scott'],
                            'Offer' => ['Mia Garcia'],
                            'Hired' => ['James Wilson'],
                        ];
                    @endphp
                    @foreach ($columns as $stage => $names)
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <div class="flex items-center justify-between">
                                <h4 class="text-sm font-semibold uppercase tracking-[0.14em] text-slate-700">{{ $stage }}</h4>
                                <span class="rounded-full bg-white px-2.5 py-1 text-xs font-semibold text-slate-600">{{ count($names) }}</span>
                            </div>
                            <div class="mt-4 space-y-3">
                                @foreach ($names as $name)
                                    <article class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                                        <p class="font-semibold text-slate-900">{{ $name }}</p>
                                        <p class="mt-1 text-sm text-slate-500">{{ $stage }} stage candidate</p>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection