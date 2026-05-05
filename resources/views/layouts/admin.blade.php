<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Intel - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-val-navy text-val-white font-inter antialiased">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-val-slate border-r-2 border-val-red flex flex-col">
            <div class="p-8 border-b border-val-navy">
                <h1 class="text-3xl text-val-red font-bebas tracking-tighter">RADIANT INTEL</h1>
                <p class="text-val-grey text-[10px] tracking-widest uppercase">Administrative Hub</p>
            </div>
            
            <nav class="flex-1 p-6 space-y-4">
                <a href="{{ route('dashboard') }}" class="block text-xl font-bebas tracking-tighter hover:text-val-red transition-all {{ request()->routeIs('dashboard') ? 'text-val-red' : '' }}">
                    COMMAND CENTER
                </a>
                <a href="{{ route('admin.posts.create') }}" class="block text-xl font-bebas tracking-tighter hover:text-val-red transition-all {{ request()->routeIs('admin.posts.create') ? 'text-val-red' : '' }}">
                    DEPLOY ARTICLE
                </a>
            </nav>

            <div class="p-6 border-t border-val-navy">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full bg-val-navy border border-val-grey hover:border-val-red hover:text-val-red transition-all font-bebas text-lg py-2 uppercase tracking-tighter">
                        Terminate Session
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-12 overflow-y-auto">
            @if(session('success'))
                <div class="bg-val-red/10 border-l-4 border-val-red p-4 mb-8">
                    <p class="text-val-red uppercase font-bebas text-xl tracking-tighter">{{ session('success') }}</p>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
