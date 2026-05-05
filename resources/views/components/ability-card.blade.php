@props(['key', 'name', 'description'])

<div class="bg-val-slate/50 border-l-2 border-val-red p-6 hover:bg-val-slate transition-all group">
    <div class="flex items-center space-x-4 mb-4">
        <span class="text-val-red font-bebas text-2xl group-hover:scale-110 transition-all">{{ $key }}</span>
        <h3 class="text-2xl">{{ $name }}</h3>
    </div>
    <p class="text-val-grey text-sm leading-relaxed">{{ $description }}</p>
</div>
