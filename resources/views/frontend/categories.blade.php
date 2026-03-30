@extends('layouts.app')

@section('title', 'Categories - Rayo Rise Collections')

@section('content')
<section class="py-40 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-32" data-aos="fade-up">
            <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8">Our Ranges</span>
            <h1 class="text-6xl md:text-[100px] font-black tracking-tighter uppercase italic text-grey-dark text-center leading-[0.8] mb-12">THE <br><span class="text-grey-accent">COLLECTIONS</span></h1>
            <p class="text-xl font-medium uppercase tracking-[0.4em] text-grey-accent/80 text-center max-w-2xl mx-auto">Discover our specialized manufacturing ranges inspired by heritage football aesthetics.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
            @forelse($categories as $index => $category)
            <div class="group relative aspect-[3/4] overflow-hidden bg-grey-light rounded-[40px] shadow-[0_40px_80px_rgba(0,0,0,0.06)] transform transition-all duration-700 hover:-translate-y-4" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-125">
                @else
                <div class="w-full h-full flex items-center justify-center text-4xl font-black uppercase italic opacity-10">{{ $category->name }}</div>
                @endif
                
                <div class="absolute inset-0 bg-gradient-to-t from-grey-dark/95 via-grey-dark/20 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-700"></div>
                
                <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-y-12 group-hover:translate-y-0">
                    <h3 class="text-4xl font-black text-white uppercase italic tracking-tighter mb-8 text-center px-6 leading-tight">{{ $category->name }}</h3>
                    <a href="{{ route('category.detail', $category->id) }}" class="px-10 py-4 bg-white text-grey-dark font-black uppercase tracking-[0.3em] text-[10px] hover:bg-grey-accent hover:text-white transition-all duration-500 rounded-full shadow-2xl inline-block">
                        Explore Collection
                    </a>
                </div>
                
                <div class="absolute bottom-12 left-0 w-full group-hover:opacity-0 transition-all duration-700 transform group-hover:translate-y-8">
                    <h3 class="text-3xl font-black text-white uppercase italic tracking-tighter text-center drop-shadow-2xl">{{ $category->name }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-40">
                <p class="text-3xl font-black opacity-10 uppercase tracking-[0.4em] italic text-center">No collections available yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection