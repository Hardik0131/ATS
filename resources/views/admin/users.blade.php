@extends('layouts.admin')

@section('title', 'Users - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Total Users</p>
                <h2 class="mt-3 text-3xl font-bold">12,480</h2>
                <p class="mt-2 text-sm text-emerald-600">+8.2% this month</p>
            </article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Active this week</p>
                <h2 class="mt-3 text-3xl font-bold">9,210</h2>
                <p class="mt-2 text-sm text-slate-500">Logged in within 7 days</p>
            </article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Invitations pending</p>
                <h2 class="mt-3 text-3xl font-bold">184</h2>
                <p class="mt-2 text-sm text-amber-600">Needs review</p>
            </article>
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <p class="text-sm text-slate-500">Suspended accounts</p>
                <h2 class="mt-3 text-3xl font-bold">26</h2>
                <p class="mt-2 text-sm text-rose-600">Policy violations</p>
            </article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">Users</h3>
                        <p class="text-sm text-slate-500">Sample data for platform accounts</p>
                    </div>
                    <button class="rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white">Invite User</button>
                </div>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-200 text-slate-500">
                                <th class="px-4 py-3 font-medium">Name</th>
                                <th class="px-4 py-3 font-medium">Role</th>
                                <th class="px-4 py-3 font-medium">Email</th>
                                <th class="px-4 py-3 font-medium">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Ava Thompson</td><td class="px-4 py-4 text-slate-600">Recruiter</td><td class="px-4 py-4 text-slate-600">ava@northstar.io</td><td class="px-4 py-4"><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Active</span></td></tr>
                            <tr class="border-b border-slate-100"><td class="px-4 py-4 font-medium">Noah Patel</td><td class="px-4 py-4 text-slate-600">Hiring Manager</td><td class="px-4 py-4 text-slate-600">noah@cloudpeak.com</td><td class="px-4 py-4"><span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">Verified</span></td></tr>
                            <tr><td class="px-4 py-4 font-medium">Mia Garcia</td><td class="px-4 py-4 text-slate-600">Talent Ops</td><td class="px-4 py-4 text-slate-600">mia@vertextalent.com</td><td class="px-4 py-4"><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Pending</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Role split</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <div><div class="flex justify-between"><span>Recruiters</span><span>45%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[45%] rounded-full bg-blue-600"></div></div></div>
                    <div><div class="flex justify-between"><span>Employers</span><span>30%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[30%] rounded-full bg-sky-400"></div></div></div>
                    <div><div class="flex justify-between"><span>Candidates</span><span>25%</span></div><div class="mt-2 h-2 rounded-full bg-slate-100"><div class="h-2 w-[25%] rounded-full bg-emerald-500"></div></div></div>
                </div>
            </article>
        </section>
    </div>
@endsection