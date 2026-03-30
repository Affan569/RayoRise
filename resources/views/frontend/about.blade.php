@extends('layouts.app')

@section('title', 'About Rayo Rise - Heritage B2B Manufacturing')

@section('content')
<section class="py-40 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-32" data-aos="fade-up">
            <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8">Established 2026</span>
            <h1 class="text-6xl md:text-[110px] font-black tracking-tighter uppercase italic text-grey-dark text-center leading-[0.8] mb-12">THE <br><span class="text-grey-accent">LEGACY</span></h1>
            <p class="text-xl font-medium uppercase tracking-[0.4em] text-grey-accent/80 text-center max-w-2xl mx-auto">Founded in London, Inspired by the Raw Energy of 90s Football Subculture.</p>
        </div>

        <div class="max-w-5xl mx-auto mb-40 space-y-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-8 text-left" data-aos="fade-right">
                    <h3 class="text-4xl font-black uppercase italic text-grey-dark leading-tight">CRAFTING <br>AUTHENTICITY</h3>
                    <p class="text-xl leading-relaxed text-grey-accent/80 font-medium">
                        Rayo Rise is a premium B2B fashion manufacturer specializing in high-performance sportswear and casual attire, deeply rooted in the iconic 90s UK football subculture.
                    </p>
                </div>
                <div class="aspect-square bg-grey-light rounded-[40px] overflow-hidden shadow-2xl transform rotate-3 hover:rotate-0 transition-all duration-700" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 pt-20 border-t border-grey-light/50">
                <div class="space-y-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-grey-light rounded-2xl flex items-center justify-center mx-auto text-grey-dark shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase italic text-grey-dark">OUR MISSION</h3>
                    <p class="text-lg text-grey-accent/80 leading-relaxed font-medium">To redefine modern manufacturing through heritage-inspired design and unmatched quality. We bridge the gap between traditional craftsmanship and contemporary streetwear aesthetics.</p>
                </div>
                <div class="space-y-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-grey-light rounded-2xl flex items-center justify-center mx-auto text-grey-dark shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase italic text-grey-dark">OUR VISION</h3>
                    <p class="text-lg text-grey-accent/80 leading-relaxed font-medium">Becoming the global leader for private label brands seeking authentic football aesthetic with professional-grade production capabilities.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 text-center py-24 border-y border-grey-light/50 bg-grey-light/20 rounded-[60px]" data-aos="zoom-in">
            <div class="space-y-4">
                <h4 class="text-5xl font-black italic text-grey-dark tracking-tighter">AUTHENTIC</h4>
                <p class="text-grey-accent/60 uppercase font-black tracking-[0.5em] text-[10px]">Core Values</p>
            </div>
            <div class="space-y-4">
                <h4 class="text-5xl font-black italic text-grey-dark tracking-tighter">RELIABLE</h4>
                <p class="text-grey-accent/60 uppercase font-black tracking-[0.5em] text-[10px]">Core Values</p>
            </div>
            <div class="space-y-4">
                <h4 class="text-5xl font-black italic text-grey-dark tracking-tighter">INNOVATIVE</h4>
                <p class="text-grey-accent/60 uppercase font-black tracking-[0.5em] text-[10px]">Core Values</p>
            </div>
        </div>
    </div>
</section>
@endsection