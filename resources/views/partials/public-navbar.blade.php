@php
    $isSolutions = request()->routeIs('solutions*');
    $isResources = request()->routeIs('resources*');
    $isCompany = request()->routeIs('company*') || request()->routeIs('team');
    $isAbout = request()->routeIs('about');
    $isContact = request()->routeIs('contact') || request()->routeIs('request-demo');
@endphp

<header class="sticky top-0 z-50 border-b border-slate-200 bg-[#f4f6f7]">
    <div class="bg-black text-white">
        <div class="mx-auto hidden max-w-7xl items-center justify-end gap-6 px-6 py-1.5 text-xs lg:flex lg:px-8">
            <a href="{{ route('company.login') }}" class="opacity-90 transition hover:opacity-100">Sign In</a>
            <a href="#" class="opacity-90 transition hover:opacity-100">Help Center</a>
        </div>
    </div>

    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8 lg:py-5">
        <a href="{{ route('home') }}" class="text-4xl font-black tracking-tight text-teal-700 lg:text-5xl">HIREFLOW</a>

        <nav class="hidden items-center gap-12 text-[1.12rem] font-medium text-slate-700 lg:flex">
            <div class="group relative -my-6 py-6">
                <button type="button" class="relative pb-1 transition hover:text-slate-900 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:bg-teal-600 after:transition-all {{ $isSolutions ? 'text-slate-900 after:w-full' : 'after:w-0' }}">Solutions</button>
                <div class="invisible absolute left-1/2 top-full z-40 mt-1 w-72 -translate-x-1/2 rounded-2xl border border-slate-200 bg-white p-4 opacity-0 shadow-xl transition duration-200 group-hover:visible group-hover:opacity-100">
                    <a href="{{ route('solutions') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Applicant Tracking</a>
                    <a href="{{ route('solutions') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">AI Screening</a>
                    <a href="{{ route('solutions') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Interview Workflow</a>
                </div>
            </div>

            <div class="group relative -my-6 py-6">
                <button type="button" class="relative pb-1 transition hover:text-slate-900 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:bg-teal-600 after:transition-all {{ $isResources ? 'text-slate-900 after:w-full' : 'after:w-0' }}">Resources</button>
                <div class="invisible absolute left-1/2 top-full z-40 mt-1 w-72 -translate-x-1/2 rounded-2xl border border-slate-200 bg-white p-4 opacity-0 shadow-xl transition duration-200 group-hover:visible group-hover:opacity-100">
                    <a href="{{ route('resources.weekly-hiring-brief') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Weekly Hiring Brief</a>
                    <a href="{{ route('resources.structured-interview-kit') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Interview Kit</a>
                    <a href="{{ route('resources.hiring-leader-stories') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Leader Stories</a>
                </div>
            </div>

            <div class="group relative -my-6 py-6">
                <button type="button" class="relative pb-1 transition hover:text-slate-900 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:bg-teal-600 after:transition-all {{ $isCompany ? 'text-slate-900 after:w-full' : 'after:w-0' }}">Company</button>
                <div class="invisible absolute left-1/2 top-full z-40 mt-1 w-72 -translate-x-1/2 rounded-2xl border border-slate-200 bg-white p-4 opacity-0 shadow-xl transition duration-200 group-hover:visible group-hover:opacity-100">
                    <a href="{{ route('about') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">About Us</a>
                    <a href="{{ route('company') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Customer Stories</a>
                    <a href="{{ route('team') }}" class="block rounded-lg px-3 py-2 text-base hover:bg-slate-50 hover:text-teal-700">Careers</a>
                </div>
            </div>

            <a href="{{ route('about') }}" class="relative pb-1 transition hover:text-slate-900 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:bg-teal-600 after:transition-all {{ $isAbout ? 'text-slate-900 after:w-full' : 'after:w-0' }}">About</a>
            <a href="{{ route('contact') }}" class="relative pb-1 transition hover:text-slate-900 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:bg-teal-600 after:transition-all {{ $isContact ? 'text-slate-900 after:w-full' : 'after:w-0' }}">Contact</a>
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="{{ route('request-demo') }}" class="btn-primary text-sm font-semibold">Get a Demo</a>
            <a href="{{ route('pricing') }}" class="btn-secondary text-sm font-semibold">Pricing</a>
        </div>

        <button id="mobile-nav-open" type="button" class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white p-2 text-slate-700 shadow-sm lg:hidden" aria-label="Open navigation menu">
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round">
                <path d="M4 6h16" />
                <path d="M4 12h16" />
                <path d="M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-nav-overlay" class="fixed inset-0 z-40 hidden bg-black/40 lg:hidden"></div>

    <div id="mobile-nav-drawer" class="fixed inset-0 z-50 hidden h-screen w-full overflow-y-auto bg-[#f8f9fb] shadow-2xl lg:hidden">
        <div class="bg-black px-6 py-2.5 text-sm text-white">
            <div class="flex items-center justify-between">
                <a href="{{ route('company.login') }}" class="font-medium">Sign In</a>
                <a href="#" class="font-medium">Help Center</a>
            </div>
        </div>

        <div class="flex items-center justify-end px-5 py-3">
            <button id="mobile-nav-close" type="button" class="rounded-full p-2 text-slate-700 transition hover:bg-slate-200" aria-label="Close navigation menu">
                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                    <path d="M6 6l12 12" />
                    <path d="M18 6L6 18" />
                </svg>
            </button>
        </div>

        <div class="px-5 pb-8">
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <div class="space-y-1.5 text-slate-800">
                    <div data-mobile-submenu-root class="rounded-xl py-2">
                        <button data-mobile-submenu-trigger type="button" class="flex w-full items-center justify-between text-left text-[1.2rem] font-semibold text-slate-800">
                            <span>Solutions</span>
                            <span data-mobile-submenu-icon class="text-[1.55rem] leading-none text-blue-600 transition">⌄</span>
                        </button>
                        <div data-mobile-submenu-panel class="hidden mt-2 space-y-1.5 border-l-2 border-teal-100 pl-4 text-[0.95rem] text-slate-600">
                            <a href="{{ route('solutions') }}" class="block py-1 hover:text-teal-700">Applicant Tracking</a>
                            <a href="{{ route('solutions') }}" class="block py-1 hover:text-teal-700">AI Screening</a>
                            <a href="{{ route('solutions') }}" class="block py-1 hover:text-teal-700">Interview Workflow</a>
                        </div>
                    </div>

                    <div data-mobile-submenu-root class="rounded-xl py-2">
                        <button data-mobile-submenu-trigger type="button" class="flex w-full items-center justify-between text-left text-[1.2rem] font-semibold text-slate-800">
                            <span>Resources</span>
                            <span data-mobile-submenu-icon class="text-[1.55rem] leading-none text-blue-600 transition">⌄</span>
                        </button>
                        <div data-mobile-submenu-panel class="hidden mt-2 space-y-1.5 border-l-2 border-teal-100 pl-4 text-[0.95rem] text-slate-600">
                            <a href="{{ route('resources.weekly-hiring-brief') }}" class="block py-1 hover:text-teal-700">Weekly Hiring Brief</a>
                            <a href="{{ route('resources.structured-interview-kit') }}" class="block py-1 hover:text-teal-700">Interview Kit</a>
                            <a href="{{ route('resources.hiring-leader-stories') }}" class="block py-1 hover:text-teal-700">Leader Stories</a>
                        </div>
                    </div>

                    <div data-mobile-submenu-root class="rounded-xl py-2">
                        <button data-mobile-submenu-trigger type="button" class="flex w-full items-center justify-between text-left text-[1.2rem] font-semibold text-slate-800">
                            <span>Company</span>
                            <span data-mobile-submenu-icon class="text-[1.55rem] leading-none text-blue-600 transition">⌄</span>
                        </button>
                        <div data-mobile-submenu-panel class="hidden mt-2 space-y-1.5 border-l-2 border-teal-100 pl-4 text-[0.95rem] text-slate-600">
                            <a href="{{ route('about') }}" class="block py-1 hover:text-teal-700">About Us</a>
                            <a href="{{ route('company') }}" class="block py-1 hover:text-teal-700">Customer Stories</a>
                            <a href="{{ route('team') }}" class="block py-1 hover:text-teal-700">Careers</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 space-y-3">
                <a href="{{ route('contact') }}" class="btn-primary block w-full text-center text-[1.05rem] font-semibold">Request Demo</a>
                <a href="{{ route('pricing') }}" class="btn-secondary block w-full text-center text-[1.05rem] font-semibold">Pricing</a>
            </div>
        </div>
    </div>
</header>

<script>
    (() => {
        const openBtn = document.getElementById('mobile-nav-open');
        const closeBtn = document.getElementById('mobile-nav-close');
        const overlay = document.getElementById('mobile-nav-overlay');
        const drawer = document.getElementById('mobile-nav-drawer');

        if (!openBtn || !closeBtn || !overlay || !drawer) {
            return;
        }

        const openDrawer = () => {
            drawer.classList.remove('hidden');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        };

        const closeDrawer = () => {
            drawer.classList.add('hidden');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        };

        openBtn.addEventListener('click', openDrawer);
        closeBtn.addEventListener('click', closeDrawer);
        overlay.addEventListener('click', closeDrawer);

        const roots = drawer.querySelectorAll('[data-mobile-submenu-root]');
        roots.forEach((root) => {
            const trigger = root.querySelector('[data-mobile-submenu-trigger]');
            const panel = root.querySelector('[data-mobile-submenu-panel]');
            const icon = root.querySelector('[data-mobile-submenu-icon]');

            if (!trigger || !panel || !icon) {
                return;
            }

            trigger.addEventListener('click', () => {
                const isOpen = !panel.classList.contains('hidden');
                panel.classList.toggle('hidden');
                icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        });
    })();
</script>
