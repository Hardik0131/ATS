@extends('layouts.admin')

@section('title', 'Settings - HireFlow Admin')

@section('content')
    <div class="space-y-6">
        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <h3 class="text-lg font-semibold">Admin profile</h3>
                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Full name</span><input type="text" value="Admin User" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:bg-white"></label>
                    <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Email</span><input type="email" value="admin@hireflow.test" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:bg-white"></label>
                    <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Role</span><input type="text" value="Super Admin" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:bg-white"></label>
                    <label class="space-y-2"><span class="text-sm font-medium text-slate-600">Timezone</span><input type="text" value="UTC -05:00" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:bg-white"></label>
                </div>
                <div class="mt-6 flex gap-3"><button class="rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white">Save changes</button><button class="rounded-xl border border-slate-200 px-4 py-3 text-sm font-semibold">Reset</button></div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">Plan</h3>
                <div class="mt-4 rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Current plan</p>
                    <p class="mt-2 text-2xl font-bold">Enterprise</p>
                    <p class="mt-2 text-sm text-slate-600">Unlimited companies, analytics, and moderation tools.</p>
                </div>
                <div class="mt-4 space-y-3 text-sm">
                    <div class="flex justify-between rounded-xl bg-slate-50 px-4 py-3"><span>Members</span><span class="font-semibold">24/50</span></div>
                    <div class="flex justify-between rounded-xl bg-slate-50 px-4 py-3"><span>API usage</span><span class="font-semibold">61%</span></div>
                    <div class="flex justify-between rounded-xl bg-slate-50 px-4 py-3"><span>Storage</span><span class="font-semibold">412 GB</span></div>
                </div>
            </article>
        </section>

        <section class="grid gap-6 xl:grid-cols-3">
            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70 xl:col-span-2">
                <h3 class="text-lg font-semibold">Notifications</h3>
                <div class="mt-6 space-y-4 text-sm">
                    <label class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3"><span>Email alerts for new approvals</span><input type="checkbox" checked class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
                    <label class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3"><span>Weekly summary reports</span><input type="checkbox" checked class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
                    <label class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3"><span>Security login alerts</span><input type="checkbox" class="h-5 w-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500"></label>
                </div>
            </article>

            <article class="rounded-2xl bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-lg font-semibold">API</h3>
                <div class="mt-4 space-y-3 text-sm">
                    <div class="rounded-xl bg-slate-50 px-4 py-3"><p class="text-slate-500">Primary key</p><p class="mt-1 font-mono text-xs">hf_live_7a9d••••••••••••</p></div>
                    <div class="rounded-xl bg-slate-50 px-4 py-3"><p class="text-slate-500">Webhook endpoint</p><p class="mt-1 break-all text-xs font-mono">https://api.hireflow.test/webhooks/admin</p></div>
                </div>
            </article>
        </section>
    </div>
@endsection