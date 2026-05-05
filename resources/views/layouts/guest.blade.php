<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADIANT INTEL - Valorant News & Guides</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-val-navy text-val-white font-inter antialiased">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-val-navy border-b border-val-red/20">
        <!-- Top Ticker -->
        <div class="bg-val-red text-white py-1 px-6 overflow-hidden whitespace-nowrap">
            <div class="flex items-center space-x-8 animate-pulse text-[10px] font-bold tracking-widest uppercase">
                <span>Live Meta:</span>
                @foreach($metaStats['trending_agents'] ?? [] as $agent)
                    <span>{{ $agent['name'] }} @if($agent['is_new'] ?? false) <span class="text-val-navy bg-white px-1">NEW</span> @else {{ $agent['change'] >= 0 ? '+' : '' }}{{ $agent['change'] }}% WR @endif</span>
                @endforeach
                <span class="ml-auto">Patch {{ $metaStats['current_patch'] ?? '0.0' }}</span>
            </div>
        </div>

        <!-- Main Nav -->
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center space-x-2 group">
                <img src="{{ asset('images/valo-logo.png') }}" alt="RADIANT INTEL" class="h-10 w-auto group-hover:scale-105 transition-all">
            </a>
            
            <div class="hidden md:flex items-center space-x-8 h-full">
                <div class="relative group h-full flex items-center">
                    <a href="#" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">AGENTS ▾</a>
                    <div class="absolute top-20 left-0 w-64 bg-val-slate border border-val-red/20 p-6 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all z-[60] grid grid-cols-2 gap-2">
                        <a href="/agents/jett" class="text-xs hover:text-val-red uppercase tracking-widest">Jett</a>
                        <a href="/agents/omen" class="text-xs hover:text-val-red uppercase tracking-widest">Omen</a>
                        <a href="/agents/neon" class="text-xs hover:text-val-red uppercase tracking-widest">Neon</a>
                    </div>
                </div>
                <div class="relative group h-full flex items-center">
                    <a href="#" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">MAPS ▾</a>
                    <div class="absolute top-20 left-0 w-64 bg-val-slate border border-val-red/20 p-6 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all z-[60] flex flex-col space-y-2">
                        <a href="/maps/ascent" class="text-xs hover:text-val-red uppercase tracking-widest">Ascent</a>
                        <a href="/maps/bind" class="text-xs hover:text-val-red uppercase tracking-widest">Bind</a>
                    </div>
                </div>
                <a href="/news" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">LATEST NEWS</a>
                <a href="/guides" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">GUIDES</a>
            </div>

            <a href="{{ route('login') }}" class="font-bebas text-xl tracking-tighter text-val-grey hover:text-val-red transition-all border border-val-grey/30 px-4 py-1">ADMIN</a>
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
                <img src="{{ asset('images/valo-logo.png') }}" alt="RADIANT INTEL" class="h-8 w-auto mb-4">
                <p class="text-val-grey text-xs uppercase tracking-widest">A bespoke tactical news hub</p>
            </div>
            <div class="text-val-grey text-[10px] tracking-widest uppercase">
                &copy; {{ date('Y') }} Radiant Intel. Built for Valorant enthusiasts.
            </div>
        </div>
    </footer>
</body>
</html>
