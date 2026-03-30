@extends('layouts.app')

@section('title', $category->name . ' - Rayo Rise Collections')

@section('content')
<section class="py-40 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-32" data-aos="fade-up">
            <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8">Collection View</span>
            <h1 class="text-6xl md:text-[100px] font-black tracking-tighter uppercase italic text-grey-dark text-center leading-[0.8] mb-8">{{ $category->name }}</h1>
            <p class="text-xl font-medium uppercase tracking-[0.4em] text-grey-accent/80 text-center">Elite Range • {{ $category->products->count() }} Pieces</p>
            
            <div class="mt-16">
                <a href="{{ route('categories') }}" class="inline-flex items-center space-x-4 group">
                    <span class="w-10 h-10 rounded-full border border-grey-dark/10 flex items-center justify-center group-hover:bg-grey-dark group-hover:text-white transition-all duration-500">&larr;</span>
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-grey-dark">Back to collections</span>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            @forelse($category->products as $product)
            <div class="group text-center" data-aos="fade-up">
                <a href="{{ route('product.detail', $product->id) }}" class="block aspect-square overflow-hidden bg-grey-light mb-8 relative rounded-[32px] shadow-[0_30px_60px_rgba(0,0,0,0.05)] mx-auto transform transition-all duration-700 group-hover:-translate-y-2">
                    @if($product->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-110">
                    @else
                    <div class="w-full h-full flex items-center justify-center opacity-10 font-black italic text-2xl uppercase text-center">NO IMAGE</div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-grey-dark/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </a>
                <h3 class="text-2xl font-black uppercase italic tracking-tighter mb-4 text-center text-grey-dark group-hover:text-grey-accent transition-colors duration-300">{{ $product->name }}</h3>
                <a href="{{ route('product.detail', $product->id) }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-grey-accent hover:text-grey-dark transition-colors inline-block border-b border-transparent hover:border-grey-dark pb-1">View Piece Details</a>
            </div>
            @empty
            <div class="col-span-4 text-center py-40">
                <p class="text-3xl font-black opacity-10 uppercase tracking-[0.4em] italic text-center">This collection is being curated.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection