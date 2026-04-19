@extends('layouts.site')

@section('title', 'Contact | HireFlow')

@section('content')
<main class="py-14">
    <section class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:px-8">
        <div>
            <p class="text-sm font-semibold tracking-[0.18em] text-teal-700">CONTACT</p>
            <h1 class="font-display mt-3 text-5xl font-bold text-slate-900">Let&apos;s build your hiring system together.</h1>
            <p class="mt-5 text-lg text-slate-600">Tell us about your current process and we will show how HireFlow can improve quality and speed.</p>
            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=1400&q=80" alt="Team meeting at desk" class="mt-8 h-[280px] w-full rounded-3xl object-cover shadow-lg">
        </div>

        <div class="card rounded-2xl border border-slate-200 shadow-lg">
            <h2 class="font-display text-3xl font-bold text-slate-900">Request a Demo</h2>
            <p class="mt-2 text-slate-600">Fill this form and our team will get back within one business day.</p>
            <form class="mt-6 space-y-4">
                <input type="text" placeholder="Full Name" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-100">
                <input type="email" placeholder="Work Email" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-100">
                <input type="text" placeholder="Company" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-100">
                <textarea rows="4" placeholder="What are your current hiring challenges?" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-100"></textarea>
                <button class="btn-primary w-full font-semibold" type="button">Send Request</button>
            </form>
        </div>
    </section>
</main>
@endsection
