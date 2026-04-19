<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HireFlow Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/admin-dashboard.js'])
</head>
<body class="dashboard-theme dashboard-scrollbar bg-[#0B1220] text-[#F9FAFB] antialiased">
    @php
        $navItems = [
            ['label' => 'Dashboard', 'route' => 'admin.dashboard', 'icon' => 'dashboard'],
            ['label' => 'Users', 'route' => 'admin.users', 'icon' => 'users'],
            ['label' => 'Recruiters', 'route' => 'admin.recruiters', 'icon' => 'recruiters'],
            ['label' => 'Companies', 'route' => 'admin.companies', 'icon' => 'companies'],
            ['label' => 'Jobs', 'route' => 'admin.jobs', 'icon' => 'jobs'],
            ['label' => 'Applications', 'route' => 'admin.applications', 'icon' => 'applications'],
            ['label' => 'Moderation', 'route' => 'admin.moderation', 'icon' => 'moderation'],
            ['label' => 'Reports', 'route' => 'admin.reports', 'icon' => 'reports'],
            ['label' => 'Analytics', 'route' => 'admin.analytics', 'icon' => 'analytics'],
            ['label' => 'Settings', 'route' => 'admin.settings', 'icon' => 'settings'],
        ];
    @endphp

    <div class="min-h-screen lg:flex lg:items-start">
        <div id="admin-sidebar-overlay" class="fixed inset-0 z-40 hidden bg-slate-900/50 lg:hidden"></div>

        <aside id="admin-sidebar" class="dashboard-scroll fixed inset-y-0 left-0 z-50 flex w-80 -translate-x-full flex-col overflow-y-auto overscroll-contain border-r border-[#1F2937] bg-[#020617] text-gray-300 transition-transform duration-300 [-webkit-overflow-scrolling:touch] lg:sticky lg:top-0 lg:z-auto lg:h-screen lg:translate-x-0 lg:self-start">
            <div class="flex items-center justify-between border-b border-[#1F2937] px-6 py-5">
                <div>
                    <p class="text-xs font-semibold tracking-[0.2em] text-blue-400">HIREFLOW</p>
                    <h1 class="mt-1 text-2xl font-bold">Admin</h1>
                </div>
                <button id="admin-sidebar-close" type="button" class="rounded-lg p-2 text-gray-300 hover:bg-gray-800 lg:hidden" aria-label="Close sidebar">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                        <path d="M6 6l12 12" />
                        <path d="M18 6L6 18" />
                    </svg>
                </button>
            </div>

            <nav class="flex-1 space-y-2 px-4 py-5 text-sm font-medium">
                @foreach ($navItems as $item)
                    @php $active = request()->routeIs($item['route']); @endphp
                    <a href="{{ route($item['route']) }}" class="flex items-center gap-3 rounded-xl px-4 py-3 transition {{ $active ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg {{ $active ? 'bg-white/15' : 'bg-[#111827]' }}">
                            @if ($item['icon'] === 'dashboard')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h6v6H4z" /><path d="M14 6h6v4h-6z" /><path d="M14 12h6v6h-6z" /><path d="M4 14h6v6H4z" /></svg>
                            @elseif ($item['icon'] === 'users')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 11a4 4 0 10-8 0 4 4 0 008 0z" /><path d="M4 20a8 8 0 0116 0" /></svg>
                            @elseif ($item['icon'] === 'recruiters')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16" /><path d="M7 7v10" /><path d="M17 7v10" /><path d="M7 17h10" /><path d="M9 11h6" /></svg>
                            @elseif ($item['icon'] === 'companies')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16" /><path d="M6 20V8l6-3v15" /><path d="M14 20V6l4 2v12" /></svg>
                            @elseif ($item['icon'] === 'jobs')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h14v12H5z" /><path d="M9 7V5h6v2" /><path d="M9 12h6" /></svg>
                            @elseif ($item['icon'] === 'applications')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3h10l4 4v14H7z" /><path d="M14 3v5h5" /><path d="M9 13h6" /><path d="M9 17h6" /></svg>
                            @elseif ($item['icon'] === 'moderation')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 4v5c0 5-3.5 7.9-8 9-4.5-1.1-8-4-8-9V7l8-4z" /><path d="M12 8v5" /><path d="M12 16h.01" /></svg>
                            @elseif ($item['icon'] === 'reports')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3h10l4 4v14H3V7z" /><path d="M8 14h8" /><path d="M8 10h4" /></svg>
                            @elseif ($item['icon'] === 'analytics')
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19h16" /><path d="M7 16V9" /><path d="M12 16V5" /><path d="M17 16v-6" /></svg>
                            @else
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16" /><path d="M4 12h16" /><path d="M4 17h16" /></svg>
                            @endif
                        </span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <div class="border-t border-[#1F2937] p-4">
                <div class="rounded-lg border border-[#1F2937] bg-[#111827] p-4 shadow-md">
                    <p class="text-xs font-semibold tracking-[0.14em] text-blue-300">SYSTEM STATUS</p>
                    <p class="mt-2 text-sm text-[#9CA3AF]">All hiring operations are running normally.</p>
                </div>
            </div>
        </aside>

        <div class="flex min-w-0 flex-1 flex-col">
            <header class="sticky top-0 z-30 border-b border-gray-800 bg-[#0B1220] backdrop-blur">
                <div class="flex items-center gap-4 px-4 py-4 sm:px-6 lg:px-8">
                    <button id="admin-sidebar-open" type="button" class="inline-flex rounded-lg border border-gray-700 p-2 text-gray-300 lg:hidden" aria-label="Open sidebar">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                            <path d="M4 6h16" />
                            <path d="M4 12h16" />
                            <path d="M4 18h16" />
                        </svg>
                    </button>

                    <div class="flex-1">
                        <label class="relative block max-w-2xl">
                            <span class="sr-only">Search</span>
                            <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-gray-500">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <path d="M20 20l-3.5-3.5"></path>
                                </svg>
                            </span>
                            <input type="text" placeholder="Search users, recruiters, jobs..." class="w-full rounded-2xl border border-gray-700 bg-[#111827] py-3 pl-12 pr-4 text-sm text-gray-200 outline-none transition placeholder:text-gray-500 focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20">
                        </label>
                    </div>

                    <button type="button" class="relative rounded-full border border-gray-700 p-2 text-gray-300 hover:bg-gray-800">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                            <path d="M15 17h5l-1.4-1.4A2 2 0 0018 14.2V11a6 6 0 10-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5" />
                            <path d="M9.5 19a2.5 2.5 0 005 0" />
                        </svg>
                        <span class="absolute right-1 top-1 h-2.5 w-2.5 rounded-full bg-blue-600"></span>
                    </button>

                    <div class="flex items-center gap-3 rounded-2xl border border-gray-700 bg-[#111827] px-3 py-2">
                        <div class="h-10 w-10 rounded-full bg-blue-600 text-center text-sm font-bold leading-10 text-white">AD</div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-semibold text-[#F9FAFB]">Admin User</p>
                            <p class="text-xs text-[#9CA3AF]">Super Admin</p>
                        </div>
                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
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