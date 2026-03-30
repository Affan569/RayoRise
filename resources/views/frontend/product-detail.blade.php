@extends('layouts.app')

@section('title', $product->name . ' - Rayo Rise Product Details')

@section('content')
<section class="py-40 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 mb-32 items-start">
            <!-- Product Images -->
            <div class="space-y-10" data-aos="fade-right">
                <div class="aspect-square bg-grey-light rounded-[40px] shadow-[0_40px_80px_rgba(0,0,0,0.08)] overflow-hidden border border-grey-light/50 transition-all duration-700 group mx-auto relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-grey-dark/5 to-transparent z-10"></div>
                    @if($product->images->isNotEmpty())
                    <img id="mainImage" src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-110">
                    @else
                    <div class="w-full h-full flex items-center justify-center opacity-10 font-black italic text-6xl uppercase text-center">NO IMAGE</div>
                    @endif
                </div>
                <div class="grid grid-cols-4 gap-6 max-w-md mx-auto">
                    @foreach($product->images as $image)
                    <button onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}')" class="aspect-square bg-grey-light rounded-2xl overflow-hidden hover:scale-110 transition-all duration-500 border-2 border-transparent hover:border-grey-dark shadow-sm">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-12 text-center lg:text-left" data-aos="fade-left">
                <div class="space-y-6">
                    <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full">{{ $product->category->name }}</span>
                    <h1 class="text-6xl md:text-[90px] font-black tracking-tighter uppercase italic text-grey-dark text-center lg:text-left leading-[0.8] drop-shadow-sm">{{ $product->name }}</h1>
                </div>

                <div class="space-y-8">
                    <h3 class="text-xl font-black uppercase italic text-grey-dark/40 text-center lg:text-left tracking-widest">DESCRIPTION</h3>
                    <p class="text-xl leading-relaxed text-grey-accent/80 text-center lg:text-left font-medium">{{ $product->description }}</p>
                </div>

                <div class="grid grid-cols-2 gap-8 py-10 border-y border-grey-light/50">
                    <div class="flex flex-col items-center lg:items-start space-y-4">
                        <span class="w-12 h-12 rounded-2xl bg-grey-light flex items-center justify-center text-grey-dark shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 21a11.955 11.955 0 01-9.618-13.016L12 2l9.618 5.984z"></path></svg>
                        </span>
                        <div class="text-center lg:text-left">
                            <h5 class="text-[11px] font-black uppercase tracking-widest text-grey-dark mb-1">Authentic Fabric</h5>
                            <p class="text-[10px] uppercase font-bold text-grey-accent/60">Premium Retro Blend</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center lg:items-start space-y-4">
                        <span class="w-12 h-12 rounded-2xl bg-grey-light flex items-center justify-center text-grey-dark shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </span>
                        <div class="text-center lg:text-left">
                            <h5 class="text-[11px] font-black uppercase tracking-widest text-grey-dark mb-1">Elite Durability</h5>
                            <p class="text-[10px] uppercase font-bold text-grey-accent/60">Reinforced Stitching</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-8 justify-center lg:justify-start">
                    <a href="{{ route('cart.add', $product->id) }}" class="px-14 py-7 bg-grey-dark text-white font-black uppercase tracking-[0.3em] text-[11px] hover:bg-grey-accent transition-all duration-700 rounded-full shadow-[0_30px_60px_rgba(0,0,0,0.15)] flex-1 text-center transform hover:-translate-y-2">
                        Add to Inquiry Cart
                    </a>
                    <a href="{{ route('contact', ['product_id' => $product->id]) }}" class="px-14 py-7 border-2 border-grey-dark text-grey-dark font-black uppercase tracking-[0.3em] text-[11px] hover:bg-grey-dark hover:text-white transition-all duration-700 rounded-full flex-1 text-center transform hover:-translate-y-2">
                        Quick Enquiry
                    </a>
                </div>
            </div>
        </div>

        @if($relatedProducts->isNotEmpty())
        <div class="text-center mb-16 pt-24 border-t border-grey-light/50" data-aos="fade-up">
            <h2 class="text-4xl font-black tracking-tight uppercase italic text-grey-dark mb-4 text-center">RELATED PRODUCTS</h2>
            <div class="h-1 w-20 bg-grey-dark mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($relatedProducts as $related)
            <div class="group text-center" data-aos="fade-up">
                <a href="{{ route('product.detail', $related->id) }}" class="block aspect-square overflow-hidden bg-grey-light mb-6 relative rounded-sm shadow-md mx-auto">
                    @if($related->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $related->images->first()->image_path) }}" alt="{{ $related->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    @else
                    <div class="w-full h-full flex items-center justify-center opacity-10 font-black italic text-xl uppercase text-center">NO IMAGE</div>
                    @endif
                </a>
                <h3 class="text-lg font-black uppercase italic tracking-tight text-center text-grey-dark">{{ $related->name }}</h3>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<script>
    function changeMainImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
@endsection