@props(['name', 'role', 'biography', 'image', 'background' => null])
<header class="relative h-[70vh] flex items-end overflow-hidden border-b-2 border-val-red bg-val-navy">
    @if($background)
        <img src="{{ $background }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20">
    @endif
    
    <img src="{{ $image }}" alt="{{ $name }}" class="absolute right-0 top-0 h-full w-auto object-contain z-10 grayscale brightness-75 group-hover:grayscale-0 transition-all duration-700 transform translate-x-1/4">
    
    <div class="absolute inset-0 bg-gradient-to-r from-val-navy via-val-navy/80 to-transparent z-20"></div>
    
    <div class="max-w-7xl mx-auto px-6 pb-12 relative z-30 w-full">
        <span class="text-val-red font-bold uppercase tracking-[0.5em] text-xs mb-4 block">{{ $role }}</span>
        <h1 class="text-9xl mb-4 tracking-tighter">{{ $name }}</h1>
        <p class="max-w-2xl text-val-grey uppercase tracking-widest text-sm leading-relaxed">{{ $biography }}</p>
    </div>
</header>
