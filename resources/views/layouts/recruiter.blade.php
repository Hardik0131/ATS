<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HireFlow Recruiter')</title>
    @vite(['resources/css/app.css', 'resources/js/recruiter-dashboard.js'])
</head>

<body class="dashboard-theme dashboard-scrollbar bg-[#0B1220] text-[#F9FAFB] antialiased">
    @php
        $navItems = [
            [
                'label' => 'Dashboard',
                'route' => 'recruiter.dashboard',
                'path' => '/recruiter/dashboard',
                'icon' => 'dashboard',
            ],
            [
                'label' => 'Jobs',
                'route' => 'recruiter.jobs',
                'path' => '/recruiter/jobs',
                'icon' => 'jobs',
                'badge' => '12',
            ],
            [
                'label' => 'Candidates',
                'route' => 'recruiter.candidates',
                'path' => '/recruiter/candidates',
                'icon' => 'candidates',
                'badge' => '186',
            ],
            [
                'label' => 'Pipeline',
                'route' => 'recruiter.pipeline',
                'path' => '/recruiter/pipeline',
                'icon' => 'pipeline',
            ],
            [
                'label' => 'Interviews',
                'route' => 'recruiter.interviews',
                'path' => '/recruiter/interviews',
                'icon' => 'interviews',
                'badge' => '7',
            ],
            [
                'label' => 'Messages',
                'route' => 'recruiter.messages',
                'path' => '/recruiter/messages',
                'icon' => 'messages',
                'badge' => '12',
            ],
            [
                'label' => 'Analytics',
                'route' => 'recruiter.analytics',
                'path' => '/recruiter/analytics',
                'icon' => 'analytics',
            ],
            [
                'label' => 'Settings',
                'route' => 'recruiter.settings',
                'path' => '/recruiter/settings',
                'icon' => 'settings',
            ],
        ];
    @endphp

    <div class="min-h-screen bg-[#0B1220] lg:flex lg:items-start">
        <div id="recruiter-sidebar-overlay" class="fixed inset-0 z-40 hidden bg-slate-900/50 lg:hidden"></div>

        <aside id="recruiter-sidebar"
            class="dashboard-scroll fixed inset-y-0 left-0 z-50 flex w-80 -translate-x-full flex-col overflow-y-auto overscroll-contain border-r border-[#1F2937] bg-[#020617] text-gray-300 transition-transform duration-300 [-webkit-overflow-scrolling:touch] lg:sticky lg:top-0 lg:z-auto lg:h-screen lg:translate-x-0 lg:self-start">
            <div class="flex items-center justify-between border-b border-[#1F2937] px-6 py-5">
                <div>
                    <p class="text-xs font-semibold tracking-[0.2em] text-blue-300">HIREFLOW</p>
                    <h1 class="mt-1 text-2xl font-bold">Recruiter</h1>
                    <p class="mt-1 text-xs text-[#6B7280]">Talent Command Center</p>
                </div>
                <button id="recruiter-sidebar-close" type="button"
                    class="rounded-lg p-2 text-gray-300 hover:bg-gray-800 lg:hidden" aria-label="Close sidebar">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round">
                        <path d="M6 6l12 12" />
                        <path d="M18 6L6 18" />
                    </svg>
                </button>
            </div>

            <nav class="flex-1 space-y-2 px-4 py-5 text-sm font-medium">
                <p class="px-4 pb-2 text-xs font-semibold uppercase tracking-[0.16em] text-[#6B7280]">Workspace</p>
                @foreach ($navItems as $item)
                    @php
                        $active = request()->routeIs($item['route']) || request()->is(ltrim($item['path'], '/'));

                        if ($item['icon'] === 'jobs') {
                            $active = $active
                                || request()->routeIs('recruiter.job.*')
                                || request()->is(trim($item['path'], '/') . '*');
                        }

                        $itemHref = \Illuminate\Support\Facades\Route::has($item['route'])
                            ? route($item['route'])
                            : url($item['path']);
                    @endphp
                    <a href="{{ $itemHref }}" data-recruiter-nav-link
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 transition {{ $active ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg transition {{ $active ? 'bg-white/15 text-white' : 'bg-[#111827] text-gray-300 group-hover:bg-gray-800' }}">
                            @if ($item['icon'] === 'dashboard')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 6h6v6H4z" />
                                    <path d="M14 6h6v4h-6z" />
                                    <path d="M14 12h6v6h-6z" />
                                    <path d="M4 14h6v6H4z" />
                                </svg>
                            @elseif ($item['icon'] === 'jobs')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 7h14v12H5z" />
                                    <path d="M9 7V5h6v2" />
                                    <path d="M9 12h6" />
                                </svg>
                            @elseif ($item['icon'] === 'candidates')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 11a4 4 0 10-8 0 4 4 0 008 0z" />
                                    <path d="M4 20a8 8 0 0116 0" />
                                </svg>
                            @elseif ($item['icon'] === 'pipeline')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 6h14" />
                                    <path d="M5 12h9" />
                                    <path d="M5 18h14" />
                                    <path d="M17 10l4 2-4 2" />
                                </svg>
                            @elseif ($item['icon'] === 'interviews')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 3h10l4 4v14H3V7z" />
                                    <path d="M8 14h8" />
                                    <path d="M8 10h4" />
                                </svg>
                            @elseif ($item['icon'] === 'messages')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 5h16v10H7l-3 4z" />
                                    <path d="M8 9h8" />
                                </svg>
                            @elseif ($item['icon'] === 'analytics')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 19h16" />
                                    <path d="M7 16V9" />
                                    <path d="M12 16V5" />
                                    <path d="M17 16v-6" />
                                </svg>
                            @else
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 7h16" />
                                    <path d="M4 12h16" />
                                    <path d="M4 17h16" />
                                </svg>
                            @endif
                        </span>
                        <span class="flex-1">{{ $item['label'] }}</span>
                        @if (!empty($item['badge']))
                            <span
                                class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $active ? 'bg-blue-500/20 text-blue-400' : 'bg-[#111827] text-[#9CA3AF]' }}">{{ $item['badge'] }}</span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <div class="border-t border-[#1F2937] p-4">
                <div class="rounded-lg border border-[#1F2937] bg-[#111827] p-4 shadow-md">
                    <p class="text-xs font-semibold tracking-[0.14em] text-blue-200">TODAY</p>
                    <p class="mt-2 text-sm text-[#9CA3AF]">24 candidates need follow-up before end of day.</p>
                    <a href="{{ route('recruiter.interviews') }}"
                        class="mt-3 inline-flex items-center rounded-lg bg-blue-600 px-3 py-2 text-xs font-semibold text-white hover:bg-blue-700">Open
                        Interviews</a>
                </div>
            </div>
        </aside>

        <div class="flex min-w-0 flex-1 flex-col">
            <header class="sticky top-0 z-30 border-b border-gray-800 bg-[#0B1220] backdrop-blur">
                <div class="flex items-center gap-4 px-4 py-4 sm:px-6 lg:px-8">
                    <button id="recruiter-sidebar-open" type="button"
                        class="inline-flex rounded-lg border border-gray-700 p-2 text-gray-300 lg:hidden"
                        aria-label="Open sidebar">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round">
                            <path d="M4 6h16" />
                            <path d="M4 12h16" />
                            <path d="M4 18h16" />
                        </svg>
                    </button>

                    <div class="flex-1">
                        <label class="relative block max-w-2xl">
                            <span class="sr-only">Search candidates/jobs</span>
                            <span
                                class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-gray-500">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <path d="M20 20l-3.5-3.5"></path>
                                </svg>
                            </span>
                            <input type="text" placeholder="Search candidates, jobs, or pipelines..."
                                class="w-full rounded-2xl border border-gray-700 bg-[#111827] py-3 pl-12 pr-4 text-sm text-gray-200 outline-none transition placeholder:text-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20">
                        </label>
                    </div>

                    <button type="button"
                        class="relative rounded-full border border-gray-700 p-2 text-gray-300 hover:bg-gray-800">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round">
                            <path d="M15 17h5l-1.4-1.4A2 2 0 0018 14.2V11a6 6 0 10-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5" />
                            <path d="M9.5 19a2.5 2.5 0 005 0" />
                        </svg>
                        <span class="absolute right-1 top-1 h-2.5 w-2.5 rounded-full bg-blue-600"></span>
                    </button>

                    <div class="flex items-center gap-3 rounded-2xl border border-gray-700 bg-[#111827] px-3 py-2">
                        <div
                            class="h-10 w-10 rounded-full bg-blue-600 text-center text-sm font-bold leading-10 text-white">
                            RK</div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-semibold text-[#F9FAFB]">Recruiter</p>
                            <p class="text-xs text-[#9CA3AF]">Talent Team</p>
                        </div>
                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
