@extends('layouts.recruiter')

@section('title', 'Messages - HireFlow Recruiter')

@section('content')
    <div class="grid gap-6 xl:grid-cols-[340px_1fr]">
        <aside class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold">Inbox</h3>
                    <p class="text-sm text-slate-500">Candidate and hiring team messages</p>
                </div>
                <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">12 new</span>
            </div>
            <div class="mt-6 space-y-3">
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4"><p class="font-semibold text-slate-900">Olivia Martin</p><p class="text-sm text-slate-500">Interview timing question</p></div>
                <div class="rounded-2xl border border-slate-200 p-4"><p class="font-semibold text-slate-900">Hiring Manager</p><p class="text-sm text-slate-500">Feedback for design role</p></div>
                <div class="rounded-2xl border border-slate-200 p-4"><p class="font-semibold text-slate-900">Ava Thompson</p><p class="text-sm text-slate-500">Offer package clarification</p></div>
            </div>
        </aside>

        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <h3 class="text-lg font-semibold text-slate-900">Conversation</h3>
            <div class="mt-6 space-y-4">
                <div class="max-w-xl rounded-2xl bg-slate-50 p-4"><p class="text-sm font-semibold text-slate-900">Olivia Martin</p><p class="mt-1 text-sm text-slate-600">Could we move the interview to 11:00 AM tomorrow?</p></div>
                <div class="ml-auto max-w-xl rounded-2xl bg-blue-600 p-4 text-white"><p class="text-sm font-semibold">Recruiter</p><p class="mt-1 text-sm text-blue-50">Yes, that works. I’ll send the updated invite.</p></div>
            </div>
            <div class="mt-6 rounded-2xl border border-slate-200 p-4">
                <p class="text-sm text-slate-500">Reply box placeholder</p>
            </div>
        </section>
    </div>
@endsection