@props(['key', 'name', 'description', 'video'])
<div class="bg-val-slate/50 border-l-2 border-val-red p-8 group hover:bg-val-slate transition-all relative overflow-hidden">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-opacity">
        <source src="{{ $video }}" type="video/mp4">
    </video>
    <div class="relative z-10">
        <div class="flex items-center space-x-4 mb-6">
            <span class="text-val-red font-bebas text-4xl group-hover:scale-110 transition-all">{{ $key }}</span>
            <h3 class="text-3xl">{{ $name }}</h3>
        </div>
        <p class="text-val-grey text-sm leading-relaxed">{{ $description }}</p>
    </div>
</div>
