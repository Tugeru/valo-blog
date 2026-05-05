@props(['name', 'role', 'biography', 'image'])
<header class="relative h-[70vh] flex items-end overflow-hidden border-b-2 border-val-red">
    <img src="{{ $image }}" alt="{{ $name }}" class="absolute inset-0 w-full h-full object-cover grayscale brightness-50">
    <div class="absolute inset-0 bg-gradient-to-t from-val-navy to-transparent"></div>
    <div class="max-w-7xl mx-auto px-6 pb-12 relative z-10 w-full">
        <span class="text-val-red font-bold uppercase tracking-[0.5em] text-xs mb-4 block">{{ $role }}</span>
        <h1 class="text-9xl mb-4">{{ $name }}</h1>
        <p class="max-w-2xl text-val-grey uppercase tracking-widest text-sm leading-relaxed">{{ $biography }}</p>
    </div>
</header>
