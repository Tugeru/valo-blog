@extends('layouts.admin')

@section('content')
    <div class="mb-12">
        <h2 class="text-5xl tracking-tighter mb-2">REVISE DEPLOYMENT</h2>
        <p class="text-val-grey uppercase tracking-widest text-xs">Post Edit Protocol</p>
    </div>

    <div class="max-w-4xl mx-auto bg-val-slate p-12 border-l-4 border-val-red shadow-2xl">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-12" x-data="{ photoPreview: null }">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <label class="block text-xs uppercase text-val-grey tracking-widest">Article Imagery (Optional Revision)</label>
                <div class="relative group">
                    <input type="file" name="image" id="image" class="hidden" @change="
                        const reader = new FileReader();
                        reader.onload = (e) => { photoPreview = e.target.result; };
                        reader.readAsDataURL($event.target.files[0]);
                    ">
                    <label for="image" class="cursor-pointer block">
                        <template x-if="!photoPreview">
                            <div class="w-full aspect-video bg-black/20 border-2 border-val-red transition-all flex items-center justify-center relative">
                                <img src="{{ Storage::url($post->image_path) }}" alt="Tactical Preview" class="w-full h-full object-cover opacity-50 group-hover:opacity-30 transition-all">
                                <span class="absolute text-val-white font-bebas text-2xl uppercase border-2 border-val-white px-4 py-2">Update Tactical Image</span>
                            </div>
                        </template>
                        <template x-if="photoPreview">
                            <img :src="photoPreview" alt="Tactical Preview" class="w-full aspect-video object-cover border-2 border-val-red transition-all">
                        </template>
                    </label>
                </div>
                @error('image')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="title" class="block text-xs uppercase text-val-grey tracking-widest">Codename (Title)</label>
                <input type="text" name="title" id="title" required value="{{ old('title', $post->title) }}"
                    class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-4 px-0 transition-all text-2xl font-bebas tracking-tighter text-val-white placeholder-val-grey/30"
                    placeholder="ENTER MISSION TITLE...">
                @error('title')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="excerpt" class="block text-xs uppercase text-val-grey tracking-widest">Briefing Excerpt</label>
                <textarea name="excerpt" id="excerpt" required rows="3"
                    class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-4 px-0 transition-all text-val-white placeholder-val-grey/30"
                    placeholder="PROVIDE SHORT INTEL SUMMARY...">{{ old('excerpt', $post->excerpt) }}</textarea>
                @error('excerpt')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="content" class="block text-xs uppercase text-val-grey tracking-widest">Full Intelligence Report</label>
                <textarea name="content" id="content" required rows="10"
                    class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-4 px-0 transition-all text-val-white placeholder-val-grey/30"
                    placeholder="ENTER FULL MISSION DETAILS...">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-6">
                <a href="{{ route('dashboard') }}" class="py-4 px-8 border border-val-grey hover:border-white transition-all font-bebas text-xl uppercase tracking-tighter">
                    Abort
                </a>
                <button type="submit" class="bg-val-red hover:bg-white hover:text-val-red transition-all py-4 px-12 font-bebas text-2xl uppercase tracking-tighter shadow-lg shadow-val-red/20">
                    Update Intel
                </button>
            </div>
        </form>
    </div>
@endsection
