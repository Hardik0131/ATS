@extends('layouts.site')

@section('title', 'HireFlow | Modern ATS')

@section('content')
<main>
    <section class="bg-[#EFF6F5] px-6 pb-16 pt-12 lg:px-8 lg:pt-16">
        <div class="mx-auto max-w-5xl text-center">
            <p class="mx-auto inline-flex items-center rounded-full border border-teal-200 bg-[#E6F7F4] px-4 py-1 text-xs font-semibold tracking-[0.12em] text-teal-700">
                AI-POWERED HIRING PLATFORM
            </p>
            <h1 class="font-display mt-6 text-5xl font-bold leading-tight text-teal-900 md:text-7xl">
                Hiring Without Headaches,
                <span class="text-teal-500">Results Without Delays</span>
            </h1>
            <p class="mx-auto mt-6 max-w-3xl text-xl leading-relaxed text-teal-700/90">
                HireFlow turns hiring chaos into a clear system, so recruiters and managers spend less time chasing updates and more time closing great candidates.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-primary text-lg font-semibold">Get a Demo</a>
                <a href="{{ route('pricing') }}" class="btn-secondary text-lg font-semibold">See Pricing</a>
            </div>
        </div>

        <div class="mx-auto mt-12 max-w-6xl overflow-hidden rounded-3xl border border-teal-100 bg-white p-3 shadow-lg">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1800&q=80" alt="Hiring team collaborating" class="h-[460px] w-full rounded-2xl object-cover">
        </div>

        <div class="mx-auto mt-12 max-w-5xl text-center">
            <p class="text-sm font-semibold tracking-[0.2em] text-teal-700">RESULTS YOU CAN FEEL</p>
            <div class="mt-5 grid gap-4 rounded-3xl border border-teal-100 bg-white p-8 shadow-sm sm:grid-cols-3">
                <div>
                    <p class="text-5xl font-bold text-teal-900">43%</p>
                    <p class="mt-2 text-lg text-teal-700">Faster Time to Hire</p>
                </div>
                <div>
                    <p class="text-5xl font-bold text-teal-900">62%</p>
                    <p class="mt-2 text-lg text-teal-700">Faster Scheduling</p>
                </div>
                <div>
                    <p class="text-5xl font-bold text-teal-900">3x</p>
                    <p class="mt-2 text-lg text-teal-700">Qualified Applicants</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#0E5852] px-6 py-20 text-white lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-2 lg:items-center">
            <div class="overflow-hidden rounded-3xl border border-teal-400/30 bg-white/10 p-3">
                <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1400&q=80" alt="Candidate insights dashboard" class="h-[320px] w-full rounded-2xl object-cover">
            </div>
            <div>
                <p class="text-sm font-semibold tracking-[0.14em] text-teal-300">AI-POWERED INSIGHTS</p>
                <h2 class="font-display mt-3 text-5xl font-bold leading-tight">Hire With Clarity, Not Guesswork</h2>
                <p class="mt-5 text-xl text-teal-100/90">Every recommendation includes context and signals, so your team can make confident decisions faster.</p>
            </div>
        </div>
    </section>

    <section class="bg-[#0D4F4A] px-6 py-20 text-white lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm font-semibold tracking-[0.14em] text-teal-300">FRAUD PREVENTION</p>
                <h2 class="font-display mt-3 text-5xl font-bold leading-tight">Catch Risk Signals Before They Cost You</h2>
                <p class="mt-5 text-xl text-teal-100/90">Layered safeguards detect inconsistencies early to protect team trust, candidate quality, and business outcomes.</p>
            </div>
            <div class="overflow-hidden rounded-3xl border border-teal-400/30 bg-white/10 p-3">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1400&q=80" alt="Application screening board" class="h-[320px] w-full rounded-2xl object-cover">
            </div>
        </div>
    </section>

    <section class="bg-[#F7FAFA] px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl text-center">
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">BUILT FOR YOUR WORLD</p>
            <h2 class="font-display mt-3 text-5xl font-bold text-teal-900">20+ Industries. One Hiring Engine.</h2>
            <div class="mx-auto mt-10 grid max-w-5xl gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Technology</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Business Services</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Retail and Hospitality</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Manufacturing</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Financial Services</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Healthcare</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Education</span>
                <span class="rounded-full border border-teal-200 bg-white px-5 py-3 font-medium text-teal-800">Logistics</span>
            </div>
        </div>
    </section>

    <section class="bg-white px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl text-center">
            <h2 class="font-display text-5xl font-bold text-teal-900">Trusted by Leading Teams</h2>
            <div class="mx-auto mt-10 grid max-w-5xl gap-4 sm:grid-cols-2 lg:grid-cols-6">
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Top 50 HR Product</div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Momentum Leader</div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Enterprise Performer</div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Best ATS UX</div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Top Talent Suite</div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 px-4 py-5 text-sm font-semibold text-slate-700">Customer Choice</div>
            </div>
        </div>
    </section>

    <section class="bg-[#F3F7F7] px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl text-center">
            <p class="text-sm font-semibold tracking-[0.14em] text-teal-700">PRODUCT OVERVIEW</p>
            <h2 class="font-display mt-3 text-5xl font-bold text-teal-900">An ATS That Works Overtime (So You Don&apos;t Have To)</h2>
            <div class="mx-auto mt-10 max-w-5xl overflow-hidden rounded-3xl border border-slate-200 bg-white p-3 shadow-lg">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1800&q=80" alt="ATS dashboard overview" class="h-[520px] w-full rounded-2xl object-cover">
            </div>
        </div>
    </section>

    <section class="bg-[#F7FAFA] px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl text-center">
            <h2 class="font-display text-5xl font-bold text-teal-900">Powered by Hiring Teams Who Ship Results</h2>
            <div class="mx-auto mt-10 max-w-3xl rounded-3xl border border-teal-100 bg-white p-8 text-left shadow-sm">
                <p class="text-2xl leading-relaxed text-teal-900">
                    "HireFlow helped us standardize interviews across four departments and cut coordination time dramatically. We now move faster with better candidate experience."
                </p>
                <div class="mt-8 border-t border-teal-100 pt-5">
                    <p class="text-xl font-semibold text-slate-900">Rina Patel</p>
                    <p class="text-slate-600">Director of Talent, Northstar Labs</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h2 class="font-display text-center text-5xl font-bold text-teal-900">Stories From Real Hiring Teams</h2>
            <div class="mt-10 grid gap-6 lg:grid-cols-3">
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="Team resource card" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <p class="text-sm font-semibold text-amber-600">Benchmark Report</p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900">How Top Teams Build Consistent Hiring Quality</h3>
                        <p class="mt-2 text-slate-600">A data-backed framework to improve panel quality and speed without extra overhead.</p>
                    </div>
                </article>
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=900&q=80" alt="Whitepaper cover visual" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <p class="text-sm font-semibold text-teal-600">Playbook</p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900">AI That Supports Recruiters, Not Replaces Them</h3>
                        <p class="mt-2 text-slate-600">A practical model for introducing AI screening while preserving fairness and quality.</p>
                    </div>
                </article>
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80" alt="Customer success story" class="h-56 w-full object-cover">
                    <div class="p-6">
                        <p class="text-sm font-semibold text-indigo-600">Case Study</p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900">Scaling to 1,500 Hires With Better Interview Ops</h3>
                        <p class="mt-2 text-slate-600">How one distributed team standardized scorecards and accelerated hiring decisions.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-[#F8FBFB] px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <h2 class="font-display text-center text-5xl font-bold text-teal-900">FAQs, Answered Clearly</h2>
            <div class="mt-10 divide-y divide-teal-100 rounded-2xl border border-teal-100 bg-white px-6">
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-xl font-semibold text-teal-900">
                        How does HireFlow support structured hiring?
                        <span class="text-3xl text-teal-500 group-open:rotate-45 transition">+</span>
                    </summary>
                    <p class="mt-3 text-slate-600">Scorecards, stage-based workflows, and interviewer guidance keep your process consistent across teams.</p>
                </details>
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-xl font-semibold text-teal-900">
                        Can we automate scheduling and follow-ups?
                        <span class="text-3xl text-teal-500 group-open:rotate-45 transition">+</span>
                    </summary>
                    <p class="mt-3 text-slate-600">Yes. Automated reminders, interviewer routing, and calendar coordination reduce manual admin work.
                    </p>
                </details>
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-xl font-semibold text-teal-900">
                        Does HireFlow integrate with our current stack?
                        <span class="text-3xl text-teal-500 group-open:rotate-45 transition">+</span>
                    </summary>
                    <p class="mt-3 text-slate-600">HireFlow connects with HRIS, job boards, calendar tools, and communication tools through native and API integrations.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="bg-[#0E5852] px-6 py-20 text-center text-white lg:px-8">
        <div class="mx-auto max-w-4xl">
            <h2 class="font-display text-6xl font-bold leading-tight">Less Noise. Better Decisions.</h2>
            <p class="mx-auto mt-5 max-w-3xl text-xl text-teal-100">See how your recruiting team can run faster, stay aligned, and hire with confidence.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-full bg-white px-8 py-3 text-lg font-semibold text-teal-900 hover:bg-black hover:text-white transition-colors duration-200">Get a Demo</a>
                <a href="tel:+18885551212" class="rounded-full border border-teal-200 px-8 py-3 text-lg font-semibold text-white hover:bg-black hover:border-black transition-colors duration-200">Call (888) 555-1212</a>
            </div>
        </div>
    </section>
</main>
@endsection
