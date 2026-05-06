@extends('layouts.guest')

@section('content')
    <article class="max-w-4xl mx-auto px-6 py-20">
        <header class="mb-16">
            <div class="flex items-center space-x-4 mb-6">
                <a href="/" class="text-val-grey hover:text-val-red uppercase text-xs tracking-widest transition-all">&larr; Return to Grid</a>
                <span class="text-val-red">/</span>
                <span class="text-val-grey uppercase text-xs tracking-widest">Protocol Intel</span>
            </div>
            
            <h1 class="text-7xl md:text-8xl tracking-tighter mb-8 leading-tight">
                {{ $post->title }}
            </h1>

            <div class="flex items-center space-x-6 text-val-grey">
                <div class="flex items-center space-x-2">
                    <span class="w-4 h-4 bg-val-red"></span>
                    <span class="uppercase text-xs tracking-widest">Date: {{ $post->created_at->format('Y.m.d') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="w-4 h-4 bg-val-slate border border-val-grey"></span>
                    <span class="uppercase text-xs tracking-widest">Status: Published</span>
                </div>
            </div>
        </header>

        <div class="w-full aspect-video mb-16 border-l-8 border-val-red shadow-2xl overflow-hidden">
            <img src="{{ str_starts_with($post->image_path, 'http') ? $post->image_path : Storage::url($post->image_path) }}" 
                 alt="{{ $post->title }}"
                 class="w-full h-full object-cover">
        </div>

        <div class="prose prose-invert max-w-none">
            <p class="text-2xl text-val-grey font-inter mb-12 border-l-4 border-val-slate pl-8 italic leading-relaxed">
                {{ $post->excerpt }}
            </p>
            
            <div class="tactical-content text-val-white text-lg leading-relaxed font-inter">
                {!! $post->rendered_content !!}
            </div>
        </div>

        <div class="mt-20 pt-12 border-t border-val-slate flex justify-center">
            <a href="/" class="bg-val-red hover:bg-white hover:text-val-red text-val-white px-12 py-4 font-bebas text-3xl tracking-tighter uppercase transition-all shadow-xl shadow-val-red/20">
                End Transmission / Return
            </a>
        </div>
    </article>
@endsection
