@extends('layouts.recruiter')

@section('title', 'Settings - HireFlow Recruiter')

@section('content')
    <div class="grid gap-6 xl:grid-cols-3">
        <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
            <h3 class="text-lg font-semibold">Account Settings</h3>
            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Full name</span><input type="text" value="Recruiter User" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-600 focus:bg-white"></label>
                <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Email</span><input type="email" value="recruiter@hireflow.test" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-600 focus:bg-white"></label>
                <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Timezone</span><input type="text" value="UTC -05:00" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-600 focus:bg-white"></label>
                <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Team</span><input type="text" value="Talent Team" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-600 focus:bg-white"></label>
            </div>
            <div class="mt-6 flex gap-3"><button class="rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700">Save changes</button><button class="rounded-xl border border-slate-300 px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Reset</button></div>
        </article>

        <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
            <h3 class="text-lg font-semibold">Notifications</h3>
            <div class="mt-4 space-y-3 text-sm">
                <label class="flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3"><span>Email alerts</span><input type="checkbox" checked class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
                <label class="flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3"><span>Interview reminders</span><input type="checkbox" checked class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
                <label class="flex items-center justify-between rounded-xl bg-slate-50 px-4 py-3"><span>Weekly summary</span><input type="checkbox" class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
            </div>
        </article>
    </div>
@endsection