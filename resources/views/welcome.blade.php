@extends('layouts.guest')

@section('content')
    <!-- Hero Section -->
    <header class="py-32 px-6 border-b border-val-slate relative overflow-hidden bg-val-navy">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-val-red/5 rotate-45"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-9xl tracking-tighter mb-4 leading-none">THE NEW <span class="text-val-red">META</span></h1>
            <p class="text-val-grey uppercase tracking-[0.5em] text-xl mb-12">Elite Tactical Intelligence • Patch Notes • Guides</p>
            <div class="flex space-x-6">
                <a href="/news" class="bg-val-red text-white px-12 py-4 font-bebas text-2xl tracking-tighter uppercase hover:bg-white hover:text-val-red transition-all">Explore Intel</a>
                <a href="/agents/jett" class="border border-white text-white px-12 py-4 font-bebas text-2xl tracking-tighter uppercase hover:bg-val-red hover:border-val-red transition-all">Agent Dossiers</a>
            </div>
        </div>
    </header>

    <!-- Latest Intel Section -->
    <section class="py-24 px-6 bg-val-navy">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-6xl mb-2">TRENDING <span class="text-val-red">INTEL</span></h2>
                    <p class="text-val-grey uppercase tracking-widest text-sm">Critical field reports and meta shifts</p>
                </div>
                <a href="/news" class="text-val-red hover:text-white transition-all uppercase tracking-widest text-sm font-bold border-b border-val-red pb-1">View All News</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                    <article class="group bg-val-slate border-l-2 border-transparent hover:border-val-red transition-all">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ str_starts_with($post->image_path, 'http') ? $post->image_path : Storage::url($post->image_path) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <div class="p-6">
                            <time class="text-val-grey text-[10px] uppercase tracking-widest block mb-2">{{ $post->created_at->format('M d, Y') }}</time>
                            <h3 class="text-3xl mb-4 group-hover:text-val-red transition-all">{{ $post->title }}</h3>
                            <a href="{{ route('posts.show', $post) }}" class="text-val-red text-xs uppercase tracking-widest font-bold">Read Report →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Map Spotlight Section -->
    <section class="py-32 px-6 bg-val-slate border-y border-val-red/10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div>
                <span class="text-val-red uppercase tracking-[0.5em] text-xs font-bold mb-4 block">Map Spotlight</span>
                <h2 class="text-7xl mb-6">ASCENT <span class="text-val-grey">V2.0</span></h2>
                <p class="text-val-grey text-lg mb-10 leading-relaxed">
                    Mid control remains the absolute priority on Ascent. Our updated tactical guide covers the latest Omen one-ways and Sova lineups that are currently dominating the VCT Stage 1 meta.
                </p>
                <a href="/maps/ascent" class="inline-block bg-white text-val-navy px-10 py-3 font-bebas text-xl tracking-tighter uppercase hover:bg-val-red hover:text-white transition-all">Explore Map Strat</a>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 border border-val-red/20 rotate-3 pointer-events-none"></div>
                <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6901809059f13d8d/5f0476839d35661f237f8f94/Ascent_1.jpg" alt="Ascent" class="grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-6 bg-val-red text-white text-center">
        <h2 class="text-6xl mb-6">JOIN THE <span class="text-val-navy">RADIANT</span> SQUAD</h2>
        <p class="text-xl mb-12 max-w-2xl mx-auto opacity-90">Get the latest patch notes, agent guides, and tactical meta shifts delivered straight to your inbox.</p>
        <div class="flex justify-center space-x-4">
            <input type="email" placeholder="YOUR EMAIL ADDRESS" class="bg-white/10 border border-white/30 px-6 py-4 w-80 text-white placeholder-white/50 focus:outline-none focus:bg-white/20">
            <button class="bg-val-navy text-white px-10 py-4 font-bebas text-2xl tracking-tighter uppercase hover:bg-white hover:text-val-navy transition-all">Join Protocol</button>
        </div>
    </section>
@endsection
