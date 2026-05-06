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
                    <div class="absolute top-20 left-0 w-[600px] bg-val-slate border border-val-red/20 p-8 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all z-[60] grid grid-cols-4 gap-8">
                        <div>
                            <h4 class="text-val-red font-bebas text-lg mb-4 border-b border-val-red/10">Duelists</h4>
                            <div class="flex flex-col space-y-2">
                                <a href="/agents/jett" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Jett</a>
                                <a href="/agents/phoenix" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Phoenix</a>
                                <a href="/agents/raze" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Raze</a>
                                <a href="/agents/reyna" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Reyna</a>
                                <a href="/agents/yoru" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Yoru</a>
                                <a href="/agents/neon" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Neon</a>
                                <a href="/agents/iso" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Iso</a>
                                <a href="/agents/waylay" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Waylay</a>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-val-red font-bebas text-lg mb-4 border-b border-val-red/10">Initiators</h4>
                            <div class="flex flex-col space-y-2">
                                <a href="/agents/breach" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Breach</a>
                                <a href="/agents/sova" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Sova</a>
                                <a href="/agents/skye" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Skye</a>
                                <a href="/agents/kayo" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">KAY/O</a>
                                <a href="/agents/fade" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Fade</a>
                                <a href="/agents/gekko" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Gekko</a>
                                <a href="/agents/tejo" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Tejo</a>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-val-red font-bebas text-lg mb-4 border-b border-val-red/10">Controllers</h4>
                            <div class="flex flex-col space-y-2">
                                <a href="/agents/brimstone" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Brimstone</a>
                                <a href="/agents/viper" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Viper</a>
                                <a href="/agents/omen" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Omen</a>
                                <a href="/agents/astra" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Astra</a>
                                <a href="/agents/harbor" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Harbor</a>
                                <a href="/agents/clove" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Clove</a>
                                <a href="/agents/miks" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Miks</a>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-val-red font-bebas text-lg mb-4 border-b border-val-red/10">Sentinels</h4>
                            <div class="flex flex-col space-y-2">
                                <a href="/agents/sage" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Sage</a>
                                <a href="/agents/cypher" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Cypher</a>
                                <a href="/agents/killjoy" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Killjoy</a>
                                <a href="/agents/chamber" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Chamber</a>
                                <a href="/agents/deadlock" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Deadlock</a>
                                <a href="/agents/vyse" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Vyse</a>
                                <a href="/agents/veto" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Veto</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group h-full flex items-center">
                    <a href="#" class="font-bebas text-xl tracking-tighter hover:text-val-red transition-all">MAPS ▾</a>
                    <div class="absolute top-20 left-0 w-48 bg-val-slate border border-val-red/20 p-6 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all z-[60] flex flex-col space-y-3">
                        <a href="/maps/ascent" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Ascent</a>
                        <a href="/maps/breeze" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Breeze</a>
                        <a href="/maps/fracture" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Fracture</a>
                        <a href="/maps/haven" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Haven</a>
                        <a href="/maps/lotus" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Lotus</a>
                        <a href="/maps/pearl" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Pearl</a>
                        <a href="/maps/split" class="text-[10px] hover:text-val-red uppercase tracking-widest transition-colors">Split</a>
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
