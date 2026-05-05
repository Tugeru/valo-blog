@extends('layouts.guest')

@section('content')
    <header class="py-24 px-6 border-b border-val-slate relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-val-red/5 rotate-45"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-8xl md:text-9xl tracking-tighter mb-4 leading-none">THE NEW <span class="text-val-red">META</span></h1>
            <p class="text-val-grey uppercase tracking-[0.5em] text-sm md:text-base">Elite Tactical Intelligence • Patch Notes • Guides</p>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @forelse($posts as $post)
                <article class="group relative bg-val-slate flex flex-col hover:-translate-y-2 transition-all duration-300 border-l-4 border-transparent hover:border-val-red">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ Storage::url($post->image_path) }}" 
                             alt="{{ $post->title }}"
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-110 group-hover:scale-100 transition-all duration-700">
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
