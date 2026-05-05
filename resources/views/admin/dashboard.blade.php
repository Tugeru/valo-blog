@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-5xl tracking-tighter mb-2">COMMAND CENTER</h2>
            <p class="text-val-grey uppercase tracking-widest text-xs">Active Article Protocols</p>
        </div>
        <a href="{{ route('admin.posts.create') }}" class="bg-val-red hover:bg-white hover:text-val-red transition-all px-6 py-3 font-bebas text-xl tracking-tighter uppercase">
            Initialize New Deployment
        </a>
    </div>

    <div class="bg-val-slate border-l-4 border-val-grey">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-val-navy text-val-grey uppercase text-[10px] tracking-widest">
                    <th class="p-6">Intel ID</th>
                    <th class="p-6">Thumbnail</th>
                    <th class="p-6">Codename (Title)</th>
                    <th class="p-6">Date</th>
                    <th class="p-6 text-right">Operational Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-val-navy">
                @forelse($posts as $post)
                    <tr class="hover:bg-black/10 transition-all group">
                        <td class="p-6 text-val-grey font-mono text-xs">#{{ str_pad($post->id, 4, '0', STR_PAD_LEFT) }}</td>
                        <td class="p-6">
                            <img src="{{ Storage::url($post->image_path) }}" alt="Intel Thumbnail" class="w-20 aspect-video object-cover grayscale group-hover:grayscale-0 transition-all border border-val-navy">
                        </td>
                        <td class="p-6 font-bebas text-2xl tracking-tighter group-hover:text-val-red transition-all">{{ $post->title }}</td>
                        <td class="p-6 text-val-grey text-xs">{{ $post->created_at->format('Y.m.d') }}</td>
                        <td class="p-6 text-right space-x-4">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-val-grey hover:text-white uppercase text-xs tracking-widest transition-all">Edit</a>
                            
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-block" x-data>
                                @csrf
                                @method('DELETE')
                                <button type="button" @click="if(confirm('TERMINATE THIS INTEL?')) $el.closest('form').submit()" class="text-val-red/50 hover:text-val-red uppercase text-xs tracking-widest transition-all">
                                    Terminate
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-val-grey uppercase tracking-widest text-sm">
                            No active intel found. Ready for deployment.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
