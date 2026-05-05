@props(['name', 'status', 'description', 'minimap'])
<div class="max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
    <div>
        <span class="text-val-red font-bold uppercase tracking-[0.5em] text-xs mb-4 block">{{ $status }}</span>
        <h2 class="text-8xl mb-6">{{ $name }}</h2>
        <p class="text-val-grey text-lg mb-10 leading-relaxed">{{ $description }}</p>
    </div>
    <div class="relative">
        <div class="absolute -inset-4 border border-val-red/20 rotate-3 pointer-events-none"></div>
        <img src="{{ $minimap }}" alt="{{ $name }} Minimap" class="w-full h-auto grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl">
    </div>
</div>
