<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="/logo.png" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="font-sans text-slate-100 antialiased bg-slate-950">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-3xl opacity-30 animate-pulse">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-3xl opacity-20">
            </div>
        </div>

        <div class="z-10 flex flex-col items-center">
            <a href="/" class="flex flex-col items-center gap-4 mb-8 group">
                <img src="/logo.png" alt="CleanWheels"
                    class="w-20 h-20 rounded-2xl shadow-2xl group-hover:scale-105 transition-transform duration-300">
                <span class="text-3xl font-bold tracking-tight text-white">CleanWheels</span>
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-8 py-10 glass border border-slate-700/50 shadow-2xl overflow-hidden sm:rounded-2xl z-10 transition-all hover:shadow-indigo-500/10">
            {{ $slot }}
        </div>
    </div>
</body>

</html>