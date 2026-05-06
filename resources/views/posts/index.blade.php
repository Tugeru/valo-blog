@extends('layouts.guest')

@section('content')
    <header class="py-24 px-6 border-b border-val-slate relative overflow-hidden bg-val-navy">
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-7xl md:text-8xl tracking-tighter mb-4 leading-none">LATEST <span class="text-val-red">INTEL</span></h1>
            <p class="text-val-grey uppercase tracking-[0.5em] text-sm md:text-base">Field Reports • Tactical Analysis • Community Updates</p>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @forelse($posts as $post)
                <article class="group relative bg-val-slate flex flex-col hover:-translate-y-2 transition-all duration-300 border-l-4 border-transparent hover:border-val-red">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ str_starts_with($post->image_path, 'http') ? $post->image_path : Storage::url($post->image_path) }}" 
                             alt="{{ $post->title }}"
                             class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-700">
                    </div>
                    
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="flex items-center space-x-4 mb-4">
                            <span class="w-8 h-[2px] bg-val-red"></span>
                            <time class="text-val-grey text-[10px] uppercase tracking-widest">{{ $post->created_at->format('M d, Y') }}</time>
                        </div>
                        
                        <h2 class="text-4xl font-bebas tracking-tighter mb-4 group-hover:text-val-red transition-all">
                            {{ $post->title }}
                        </h2>
                        
                        <p class="text-val-grey text-sm leading-relaxed mb-8 flex-1">
                            {{ $post->excerpt }}
                        </p>
                        
                        <a href="{{ route('posts.show', $post) }}" 
                           class="inline-block bg-val-red hover:bg-white hover:text-val-red text-val-white px-8 py-3 font-bebas text-xl tracking-tighter uppercase transition-all w-fit self-end">
                            Read Full Intel
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-32 text-center">
                    <p class="text-val-grey uppercase tracking-[1em]">Scanning for incoming intel...</p>
                </div>
            @endforelse
        </div>

        <div class="mt-20">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
