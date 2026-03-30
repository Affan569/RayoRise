@extends('layouts.app')

@section('title', 'Your Cart - Rayo Rise')

@section('content')
<section class="py-40 bg-white overflow-hidden min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-32" data-aos="fade-up">
            <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8">Review Order</span>
            <h1 class="text-6xl md:text-[100px] font-black tracking-tighter uppercase italic text-grey-dark text-center leading-[0.8] mb-12">YOUR <br><span class="text-grey-accent">CART</span></h1>
            <p class="text-xl font-medium uppercase tracking-[0.4em] text-grey-accent/80 text-center max-w-2xl mx-auto">Selected items for B2B manufacturing inquiry.</p>
        </div>

        @if(session('cart') && count(session('cart')) > 0)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <div class="lg:col-span-2 space-y-10" data-aos="fade-right">
                @foreach(session('cart') as $id => $details)
                <div class="flex flex-col md:flex-row items-center bg-grey-light/20 p-10 rounded-[40px] shadow-[0_40px_80px_rgba(0,0,0,0.04)] border border-grey-light/50 text-center md:text-left group hover:bg-white hover:shadow-2xl transition-all duration-700">
                    <div class="w-40 h-40 flex-shrink-0 mb-8 md:mb-0 mx-auto md:mx-0 rounded-3xl overflow-hidden shadow-lg transform group-hover:scale-110 transition-transform duration-700">
                        @if($details['image'])
                        <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}" class="w-full h-full object-cover">
                        @else
                        <div class="w-full h-full bg-grey-light flex items-center justify-center font-black italic opacity-20 text-xs text-center">NO IMAGE</div>
                        @endif
                    </div>
                    <div class="md:ml-10 flex-1 text-center md:text-left">
                        <h3 class="text-3xl font-black uppercase italic tracking-tighter mb-4 text-grey-dark group-hover:text-grey-accent transition-colors duration-500">{{ $details['name'] }}</h3>
                        <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-8">
                            <span class="text-grey-accent uppercase font-black tracking-[0.2em] text-[10px] px-4 py-1.5 bg-white rounded-full border border-grey-light/50 shadow-sm">Quantity: {{ $details['quantity'] }}</span>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $id }}">
                                <button type="submit" class="text-red-500 font-black uppercase italic text-[10px] hover:text-red-700 transition tracking-[0.3em] border-b-2 border-red-500/10 pb-1">Remove Item</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="lg:col-span-1" data-aos="fade-left">
                <div class="bg-grey-dark text-white p-16 rounded-[50px] shadow-[0_50px_100px_rgba(0,0,0,0.2)] sticky top-32 text-center border border-white/5 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                    <h3 class="text-3xl font-black uppercase italic mb-10 text-center tracking-tighter">SUMMARY</h3>
                    <div class="flex justify-between items-center mb-10 border-b border-white/10 pb-6">
                        <span class="text-[11px] font-black uppercase tracking-[0.3em] text-white/50">Total Items</span>
                        <span class="text-4xl font-black italic tracking-tighter">{{ count(session('cart')) }}</span>
                    </div>
                    <p class="text-[11px] opacity-50 mb-14 uppercase font-black tracking-[0.3em] leading-relaxed text-center italic">B2B Quote will be provided after inquiry submission.</p>
                    <a href="{{ route('contact') }}" class="block w-full py-7 bg-white text-grey-dark text-center font-black uppercase tracking-[0.4em] text-[11px] hover:bg-grey-accent hover:text-white transition-all duration-700 shadow-2xl rounded-full transform hover:-translate-y-2">
                        Proceed to Inquiry
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="text-center py-40 bg-grey-light/10 rounded-[60px] border-4 border-dashed border-grey-light/50" data-aos="zoom-in">
            <h2 class="text-5xl font-black italic uppercase opacity-10 mb-12 text-center tracking-tighter">Your cart is empty</h2>
            <a href="{{ route('categories') }}" class="px-16 py-8 bg-grey-dark text-white font-black uppercase tracking-[0.4em] text-xs hover:bg-grey-accent transition-all duration-700 rounded-full shadow-2xl transform hover:-translate-y-2 inline-block">
                Browse Collections
            </a>
        </div>
        @endif
    </div>
</section>
@endsection