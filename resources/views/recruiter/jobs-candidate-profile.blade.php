@extends('layouts.recruiter')

@section('title', 'Candidate Profile - HireFlow Recruiter')

@section('content')
    @php
        $jobSlug = request('job', 'senior-product-designer');
        $candidateSlug = request('candidate', 'ava-thompson');

        $jobTitle = str($jobSlug)->replace('-', ' ')->title();
        $candidateName = str($candidateSlug)->replace('-', ' ')->title();

        $demoProfiles = [
            'ava-thompson' => [
                'name' => 'Ava Thompson',
                'headline' => 'Senior Product Designer',
                'location' => 'Jakarta, Indonesia',
                'experience' => '7 years',
                'match' => '92%',
                'stage' => 'Interview',
                'email' => 'ava.thompson@example.com',
                'phone' => '+62 812 1000 2233',
                'portfolio' => 'https://portfolio.example.com/ava-thompson',
                'skills' => ['Figma', 'Design Systems', 'UX Research', 'Wireframing'],
                'summary' => 'Strong product design leader with a track record shipping B2B SaaS experiences that improve activation and retention.',
                'highlights' => [
                    'Led redesign of enterprise dashboard and increased task completion by 31%.',
                    'Built reusable design system adopted by 5 product squads.',
                    'Mentored junior designers and improved design QA delivery speed.',
                ],
            ],
            'noah-patel' => [
                'name' => 'Noah Patel',
                'headline' => 'Product Designer',
                'location' => 'Bandung, Indonesia',
                'experience' => '5 years',
                'match' => '86%',
                'stage' => 'Screening',
                'email' => 'noah.patel@example.com',
                'phone' => '+62 813 2222 1188',
                'portfolio' => 'https://portfolio.example.com/noah-patel',
                'skills' => ['Interaction Design', 'Prototyping', 'Usability Testing'],
                'summary' => 'Hands-on product designer focused on rapid prototyping and measurable user outcomes.',
                'highlights' => [
                    'Reduced onboarding drop-off by 18% through UX simplification.',
                    'Designed mobile-first experiences for high-volume workflows.',
                    'Collaborated with PM and engineering in weekly experiment cycles.',
                ],
            ],
            'sophia-chen' => [
                'name' => 'Sophia Chen',
                'headline' => 'Lead UX Designer',
                'location' => 'Singapore',
                'experience' => '9 years',
                'match' => '95%',
                'stage' => 'Offer',
                'email' => 'sophia.chen@example.com',
                'phone' => '+65 8123 8899',
                'portfolio' => 'https://portfolio.example.com/sophia-chen',
                'skills' => ['UX Strategy', 'Design Leadership', 'Information Architecture'],
                'summary' => 'Senior UX lead experienced in scaling product design teams and shipping enterprise platforms.',
                'highlights' => [
                    'Built UX roadmap aligned to annual product strategy.',
                    'Introduced accessibility standards across 20+ product surfaces.',
                    'Improved experiment velocity by defining reusable interaction patterns.',
                ],
            ],
            'liam-scott' => [
                'name' => 'Liam Scott',
                'headline' => 'Interaction Designer',
                'location' => 'Kuala Lumpur, Malaysia',
                'experience' => '4 years',
                'match' => '81%',
                'stage' => 'Applied',
                'email' => 'liam.scott@example.com',
                'phone' => '+60 12 998 6721',
                'portfolio' => 'https://portfolio.example.com/liam-scott',
                'skills' => ['UI Design', 'Motion', 'Design Handoff'],
                'summary' => 'Interaction designer with strong visual detail and excellent design handoff discipline.',
                'highlights' => [
                    'Delivered visual refresh that improved NPS by 9 points.',
                    'Created handoff templates that reduced design QA cycles.',
                    'Partnered with frontend team on motion design implementation.',
                ],
            ],
        ];

        $profile = $demoProfiles[$candidateSlug] ?? [
            'name' => $candidateName,
            'headline' => 'Candidate',
            'location' => 'Not specified',
            'experience' => 'N/A',
            'match' => 'N/A',
            'stage' => 'Applied',
            'email' => 'candidate@example.com',
            'phone' => '-',
            'portfolio' => '#',
            'skills' => ['Communication'],
            'summary' => 'Demo candidate profile.',
            'highlights' => ['Candidate profile not found in demo list.'],
        ];
    @endphp

    <div class="mx-auto max-w-7xl space-y-6">
        <section class="rounded-3xl border border-slate-800/70 bg-linear-to-r from-slate-950 via-slate-900 to-blue-900 p-6 text-white shadow-xl shadow-slate-950/30 lg:p-8">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-200">Candidate Profile</p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight">{{ $profile['name'] }}</h2>
                    <p class="mt-2 text-sm text-slate-300 sm:text-base">{{ $profile['headline'] }} • {{ $profile['experience'] }} • {{ $profile['location'] }}</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="rounded-full bg-blue-500/20 px-3 py-1 text-xs font-semibold text-blue-200">Match {{ $profile['match'] }}</span>
                    <span class="rounded-full bg-emerald-500/20 px-3 py-1 text-xs font-semibold text-emerald-200">{{ $profile['stage'] }}</span>
                </div>
            </div>
        </section>

        <section class="grid gap-6 lg:grid-cols-[minmax(0,1fr),320px]">
            <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md shadow-slate-200/70">
                <h3 class="text-xl font-bold text-slate-900">Profile Summary</h3>
                <p class="mt-3 text-slate-700">{{ $profile['summary'] }}</p>

                <h4 class="mt-6 text-lg font-bold text-slate-900">Highlights</h4>
                <ul class="mt-3 space-y-2 text-slate-700">
                    @foreach ($profile['highlights'] as $highlight)
                        <li class="flex gap-3">
                            <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-blue-600"></span>
                            <span>{{ $highlight }}</span>
                        </li>
                    @endforeach
                </ul>

                <h4 class="mt-6 text-lg font-bold text-slate-900">Skills</h4>
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach ($profile['skills'] as $skill)
                        <span class="rounded-full bg-slate-700 px-3 py-1 text-xs font-semibold text-slate-700">{{ $skill }}</span>
                    @endforeach
                </div>
            </article>

            <aside class="space-y-4 lg:sticky lg:top-24 lg:self-start">
                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Candidate Contact</p>
                    <dl class="mt-3 space-y-3 text-sm text-slate-700">
                        <div>
                            <dt class="text-slate-500">Email</dt>
                            <dd class="font-semibold text-slate-900">{{ $profile['email'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Phone</dt>
                            <dd class="font-semibold text-slate-900">{{ $profile['phone'] }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-500">Portfolio</dt>
                            <dd><a href="{{ $profile['portfolio'] }}" class="font-semibold text-blue-600 hover:text-blue-700">Open portfolio</a></dd>
                        </div>
                    </dl>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-slate-500">Actions</p>
                    <div class="mt-3 space-y-2">
                        <a href="{{ route('recruiter.jobs.candidate.move-stage', ['job' => $jobSlug, 'candidate' => $candidateSlug, 'current_stage' => str($profile['stage'])->slug('-')]) }}" class="inline-flex w-full items-center justify-center rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">Move to next stage</a>
                        <button type="button" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Send message</button>
                        <a href="{{ route('recruiter.jobs.candidates', $listing->slug) }}" class="inline-flex w-full items-center justify-center rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Back to candidates</a>
                        <a href="{{ route('recruiter.jobs') }}" class="inline-flex w-full items-center justify-center rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Back to jobs</a>
                    </div>
                    <p class="mt-3 text-xs text-slate-500">For role: {{ $jobTitle }}</p>
                </article>
            </aside>
        </section>
    </div>
@endsection
