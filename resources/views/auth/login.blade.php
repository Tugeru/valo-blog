<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Intel - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-val-navy text-val-white font-inter min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md">
        <div class="mb-12 text-center">
            <img src="{{ asset('images/valo-logo.png') }}" alt="RADIANT INTEL" class="h-16 w-auto mx-auto mb-6">
            <p class="text-val-grey tracking-widest uppercase text-sm">ADMIN ACCESS REQUIRED</p>
        </div>

        <div class="bg-val-slate p-8 border-l-4 border-val-red shadow-2xl">
            <form action="{{ route('login') }}" method="POST" class="space-y-8">
                @csrf

                <div>
                    <label for="email" class="block text-xs uppercase text-val-grey mb-2 tracking-widest">Protocol Email</label>
                    <input type="email" name="email" id="email" required 
                        class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-3 px-0 transition-all text-val-white"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-val-red text-xs mt-2 uppercase italic">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs uppercase text-val-grey mb-2 tracking-widest">Security Key</label>
                    <input type="password" name="password" id="password" required 
                        class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-3 px-0 transition-all text-val-white">
                </div>

                <button type="submit" 
                    class="w-full bg-val-red hover:bg-white hover:text-val-red text-val-white font-bebas text-2xl py-4 transition-all uppercase tracking-tighter">
                    Initialize Session
                </button>
            </form>
        </div>

        <div class="mt-12 text-center">
            <a href="/" class="text-val-grey hover:text-val-white text-xs uppercase tracking-widest transition-all">
                &larr; Abort and Return
            </a>
        </div>
    </div>
</body>
</html>
