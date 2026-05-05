@extends('layouts.admin')

@section('content')
    <div class="mb-12">
        <h2 class="text-5xl tracking-tighter mb-2">INITIALIZE DEPLOYMENT</h2>
        <p class="text-val-grey uppercase tracking-widest text-xs">Post Creation Protocol</p>
    </div>

    <div class="max-w-4xl bg-val-slate p-12 border-l-4 border-val-red shadow-2xl">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-12" x-data="{ photoPreview: null }">
            @csrf

            <div class="space-y-4">
                <label class="block text-xs uppercase text-val-grey tracking-widest">Article Imagery</label>
                <div class="relative group">
                    <input type="file" name="image" id="image" required class="sr-only" @change="
                        const reader = new FileReader();
                        reader.onload = (e) => { photoPreview = e.target.result; };
                        reader.readAsDataURL($event.target.files[0]);
                    ">
                    <label for="image" class="cursor-pointer block">
                        <template x-if="!photoPreview">
                            <div class="w-full aspect-video bg-black/20 border-2 border-dashed border-val-grey group-hover:border-val-red transition-all flex items-center justify-center">
                                <span class="text-val-grey group-hover:text-val-red font-bebas text-2xl uppercase">Upload Tactical Image</span>
                            </div>
                        </template>
                        <template x-if="photoPreview">
                            <img :src="photoPreview" class="w-full aspect-video object-cover border-2 border-val-red transition-all">
                        </template>
                    </label>
                </div>
                @error('image')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="title" class="block text-xs uppercase text-val-grey tracking-widest">Codename (Title)</label>
                <input type="text" name="title" id="title" required value="{{ old('title') }}"
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
                    placeholder="PROVIDE SHORT INTEL SUMMARY...">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="content" class="block text-xs uppercase text-val-grey tracking-widest">Full Intelligence Report</label>
                <textarea name="content" id="content" required rows="10"
                    class="w-full bg-black/20 border-b-2 border-val-grey focus:border-val-red focus:outline-none py-4 px-0 transition-all text-val-white placeholder-val-grey/30"
                    placeholder="ENTER FULL MISSION DETAILS...">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-val-red text-xs uppercase italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-6">
                <a href="{{ route('dashboard') }}" class="py-4 px-8 border border-val-grey hover:border-white transition-all font-bebas text-xl uppercase tracking-tighter">
                    Abort
                </a>
                <button type="submit" class="bg-val-red hover:bg-white hover:text-val-red transition-all py-4 px-12 font-bebas text-2xl uppercase tracking-tighter shadow-lg shadow-val-red/20">
                    Deploy Intel
                </button>
            </div>
        </form>
    </div>
@endsection
