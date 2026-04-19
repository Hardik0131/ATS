<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HireFlow ATS')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'DM Sans', ui-sans-serif, system-ui, sans-serif; }
        .font-display { font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
    <div class="min-h-screen flex flex-col">
        @include('partials.public-navbar')

        <div class="flex-1">
            @yield('content')
        </div>

        <footer class="mt-auto bg-black text-white">
            <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">
                <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-5">
                    <div>
                        <p class="mb-4 text-xl font-semibold">Solutions</p>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="{{ route('solutions') }}" class="hover:text-white">Applicant Tracking</a></li>
                            <li><a href="{{ route('solutions') }}" class="hover:text-white">AI Screening</a></li>
                            <li><a href="{{ route('solutions') }}" class="hover:text-white">Recruitment Analytics</a></li>
                            <li><a href="{{ route('solutions') }}" class="hover:text-white">Automation</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-4 text-xl font-semibold">Explore</p>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="{{ route('pricing') }}" class="hover:text-white">Pricing</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-white">Request a Demo</a></li>
                            <li><a href="{{ route('resources') }}" class="hover:text-white">Content Library</a></li>
                            <li><a href="{{ route('resources') }}" class="hover:text-white">Webinars</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-4 text-xl font-semibold">Compare</p>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white">HireFlow vs Greenhouse</a></li>
                            <li><a href="#" class="hover:text-white">HireFlow vs Ashby</a></li>
                            <li><a href="#" class="hover:text-white">HireFlow vs Workable</a></li>
                            <li><a href="#" class="hover:text-white">ATS Buyer's Guide</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-4 text-xl font-semibold">Company</p>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                            <li><a href="{{ route('team') }}" class="hover:text-white">Careers</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Help Center</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-4 text-xl font-semibold">Connect</p>
                        <p class="text-gray-300">Follow product updates and hiring insights from our team.</p>
                        <div class="mt-4 flex items-center gap-3 text-sm text-gray-300">
                            <span class="rounded-full border border-gray-700 px-3 py-1">LinkedIn</span>
                            <span class="rounded-full border border-gray-700 px-3 py-1">X</span>
                            <span class="rounded-full border border-gray-700 px-3 py-1">YouTube</span>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-800 pt-7 text-sm text-gray-400 md:flex md:items-center md:justify-between">
                    <p>&copy; {{ date('Y') }} HireFlow. All rights reserved.</p>
                    <div class="mt-3 flex gap-5 md:mt-0">
                        <a href="#" class="hover:text-white">Privacy Policy</a>
                        <a href="#" class="hover:text-white">Terms</a>
                        <a href="#" class="hover:text-white">Security</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
