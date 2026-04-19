@extends('layouts.recruiter')

@section('title', 'Interviews - HireFlow Recruiter')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Today</p><h2 class="mt-3 text-3xl font-bold">7</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Confirmed</p><h2 class="mt-3 text-3xl font-bold">5</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Pending</p><h2 class="mt-3 text-3xl font-bold">2</h2></article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70"><p class="text-sm text-slate-500">Reschedules</p><h2 class="mt-3 text-3xl font-bold">1</h2></article>
        </section>

        <section class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <div class="flex items-center justify-between"><div><h3 class="text-lg font-semibold">Interview List</h3><p class="text-sm text-slate-500">Join or reschedule quickly</p></div></div>
            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead><tr class="border-b border-slate-200 text-slate-500"><th class="px-4 py-3 font-medium">Candidate</th><th class="px-4 py-3 font-medium">Role</th><th class="px-4 py-3 font-medium">Time</th><th class="px-4 py-3 font-medium">Status</th><th class="px-4 py-3 font-medium">Actions</th></tr></thead>
                    <tbody>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Olivia Martin</td><td class="px-4 py-4 text-slate-600">Senior Designer</td><td class="px-4 py-4 text-slate-600">10:30 AM</td><td class="px-4 py-4"><span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">Confirmed</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50">Reschedule</button></div></td></tr>
                        <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Ava Thompson</td><td class="px-4 py-4 text-slate-600">Product Manager</td><td class="px-4 py-4 text-slate-600">1:00 PM</td><td class="px-4 py-4"><span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50">Reschedule</button></div></td></tr>
                        <tr><td class="px-4 py-4 font-medium">Liam Scott</td><td class="px-4 py-4 text-slate-600">Data Analyst</td><td class="px-4 py-4 text-slate-600">4:15 PM</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Ready</span></td><td class="px-4 py-4"><div class="flex gap-2"><button class="rounded-xl bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Join</button><button class="rounded-xl border border-slate-300 px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50">Reschedule</button></div></td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection