@props(['key', 'name', 'description', 'video', 'icon' => null])
<div class="bg-val-slate/50 border-l-2 border-val-red p-8 group hover:bg-val-slate transition-all relative overflow-hidden">
    @if($video)
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-10 group-hover:opacity-20 transition-opacity">
            <source src="{{ $video }}" type="video/mp4">
        </video>
    @endif
    
    @if($icon)
        <div class="absolute right-0 bottom-0 opacity-5 pointer-events-none transform translate-x-1/4 translate-y-1/4 group-hover:opacity-10 transition-opacity">
            <img src="{{ $icon }}" alt="" class="w-64 h-64">
        </div>
    @endif

    <div class="relative z-10">
        <div class="flex items-center space-x-4 mb-6">
            <span class="text-val-red font-bebas text-4xl group-hover:scale-110 transition-all">{{ $key }}</span>
            <h3 class="text-3xl">{{ $name }}</h3>
        </div>
        <p class="text-val-grey text-sm leading-relaxed">{{ $description }}</p>
    </div>
</div>
