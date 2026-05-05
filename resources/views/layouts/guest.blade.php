<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Intel - Valorant News & Guides</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-val-navy text-val-white font-inter antialiased">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-val-navy/90 backdrop-blur-md border-b-2 border-val-red/20 shadow-xl">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center space-x-2 group">
                <img src="{{ asset('images/valo-logo.png') }}" alt="Radiant Intel" class="h-10 w-auto group-hover:scale-105 transition-all">
                <div class="w-2 h-2 bg-val-red group-hover:rotate-45 transition-all"></div>
            </a>
            
            <div class="flex items-center space-x-8">
                <a href="/" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">LATEST NEWS</a>
                <a href="{{ route('login') }}" class="font-bebas text-xl tracking-tighter text-val-grey hover:text-val-red transition-all border border-val-grey/30 px-4 py-1">ADMIN</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-val-slate border-t-2 border-val-red py-12 px-6 mt-20">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <div>
                <img src="{{ asset('images/valo-logo.png') }}" alt="Radiant Intel" class="h-8 w-auto mb-4">
                <p class="text-val-grey text-xs uppercase tracking-widest">A bespoke tactical news hub</p>
            </div>
            <div class="text-val-grey text-[10px] tracking-widest uppercase">
                &copy; {{ date('Y') }} Radiant Intel. Built for Valorant enthusiasts.
            </div>
        </div>
    </footer>
</body>
</html>
