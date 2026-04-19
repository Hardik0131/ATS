<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Error') | HireFlow</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#eef1f0] text-slate-800 antialiased">
    @include('partials.public-navbar')

    <main class="px-6 py-16 sm:py-20 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <section class="rounded-3xl border border-slate-200 bg-white p-8 shadow-xl shadow-slate-300/40 sm:p-12">
                <p class="inline-flex rounded-full border border-teal-200 bg-teal-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.16em] text-teal-700">
                    System Notice
                </p>
                <h1 class="mt-5 text-5xl font-black tracking-tight text-slate-900 sm:text-6xl">@yield('code', 'Error')</h1>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">@yield('headline', 'Something went wrong')</h2>
                <p class="mt-5 max-w-2xl text-lg leading-relaxed text-slate-600">@yield('message', 'We hit an unexpected issue. Please go back or return to the homepage.')</p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ url('/') }}" class="btn-primary text-sm font-semibold">Back to Home</a>
                    @if (Route::has('contact'))
                        <a href="{{ route('contact') }}" class="btn-secondary text-sm font-semibold">Contact Support</a>
                    @endif
                    @if (Route::has('company.login'))
                        <a href="{{ route('company.login') }}" class="btn-secondary text-sm font-semibold">Company Login</a>
                    @endif
                </div>
            </section>
        </div>
    </main>
</body>
</html>
