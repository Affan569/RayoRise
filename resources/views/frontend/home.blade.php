@extends('layouts.app')

@section('content')
<!-- Hero Slider -->
<section class="relative h-[95vh] overflow-hidden bg-grey-dark">
    <!-- Static Hero Text -->
    <div class="absolute inset-0 z-20 flex items-start justify-center pt-[70px] pointer-events-none">
        <div class="text-center px-4 max-w-6xl mx-auto" data-aos="zoom-out" data-aos-duration="2500"><br><br><br>
            <span class="inline-block px-5 py-2 bg-white/10 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8 border border-white/20">
                Elite Manufacturing
            </span>

            <h1 class="text-4xl md:text-[120px] font-black tracking-tighter uppercase italic leading-[0.8] mb-8 text-white text-glow text-center drop-shadow-[0_20px_20px_rgba(0,0,0,0.7)]">
                UK 90s <br><span class="text-orange-400 block md:inline">Football</span> Heritage
            </h1>

            <p class="text-[10px] md:text-2xl font-medium text-white/80 mb-10 uppercase tracking-[0.4em] md:tracking-[0.6em] text-center drop-shadow-2xl">
                The Pinnacle of B2B Tracksuit Production
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-12 pointer-events-auto">
                <a href="{{ route('categories') }}" class="px-10 md:px-14 py-5 md:py-7 bg-white text-grey-dark font-black uppercase tracking-[0.3em] text-[10px] md:text-[11px] hover:bg-grey-accent hover:text-white transition-all duration-700 rounded-full shadow-[0_30px_60px_rgba(0,0,0,0.3)] transform hover:-translate-y-2 active:scale-95">
                    Explore Collection
                </a>
            </div>
        </div>
    </div>

    <!-- Swiper Background Slider -->
    <div class="swiper heroSwiper h-full">
        <div class="swiper-wrapper">

            <!-- Slide 1 (Vintage Football) -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-cover bg-center scale-110 group-[.swiper-slide-active]:scale-100 transition-transform duration-[5s]"
                     style="background-image: url('{{ asset('images/1.png') }}')">
                </div>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

            <!-- Slide 2 (Tracksuit Fashion) -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('images/2.png') }}')">
                </div>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

            <!-- Slide 3 (Manufacturing Detail) -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('https://images.unsplash.com/photo-1552072092-7f9b8d63efcb?q=80&w=2070&auto=format&fit=crop')">
                </div>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

            <!-- Slide 4 (Fabric / Sewing Close-up) -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=2070&auto=format&fit=crop')">
                </div>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination !bottom-12"></div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="py-40 bg-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <!-- Left Content -->
            <div class="space-y-12 content-top-margin" data-aos="fade-right">
                <div class="space-y-6">
                    <span class="inline-block px-5 py-2 bg-grey-light text-grey-dark text-[10px] font-black uppercase tracking-[0.4em] rounded-full">Our Story</span>
                    <h2 class="text-6xl md:text-[85px] font-black tracking-tighter uppercase italic text-grey-dark text-left leading-[0.8]">WHO <br><span class="text-grey-accent">WE ARE</span></h2>
                </div>
                
                <div class="space-y-8 text-xl text-grey-dark/80 leading-relaxed text-left font-medium">
                    <p class="first-letter:text-6xl first-letter:font-black first-letter:mr-3 first-letter:float-left first-letter:text-grey-dark">
                        At <span class="text-grey-dark font-black uppercase italic underline decoration-grey-accent decoration-4 underline-offset-8">Rayorise</span>, we go beyond fashion. We are a dedicated manufacturer specializing in Vintage Retro apparel crafted with quality, style, and authenticity. 
                    </p>
                    <p>
                        Inspired by classic streetwear and timeless designs, we produce premium retro tracksuits, jackets, and exclusive collections for those who appreciate the raw spirit of 90s football culture.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-12 pt-8 border-t border-grey-light/50">
                    <div class="flex items-center space-x-4 group">
                        <span class="w-10 h-10 rounded-full bg-grey-light flex items-center justify-center text-grey-dark font-black text-sm group-hover:bg-grey-dark group-hover:text-white transition-all duration-500">01</span>
                        <span class="text-[11px] font-black uppercase tracking-[0.2em] text-grey-dark">Elite Quality</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <span class="w-10 h-10 rounded-full bg-grey-light flex items-center justify-center text-grey-dark font-black text-sm group-hover:bg-grey-dark group-hover:text-white transition-all duration-500">02</span>
                        <span class="text-[11px] font-black uppercase tracking-[0.2em] text-grey-dark">Global Reach</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <span class="w-10 h-10 rounded-full bg-grey-light flex items-center justify-center text-grey-dark font-black text-sm group-hover:bg-grey-dark group-hover:text-white transition-all duration-500">03</span>
                        <span class="text-[11px] font-black uppercase tracking-[0.2em] text-grey-dark">Expert Design</span>
                    </div>
                    <div class="flex items-center space-x-4 group">
                        <span class="w-10 h-10 rounded-full bg-grey-light flex items-center justify-center text-grey-dark font-black text-sm group-hover:bg-grey-dark group-hover:text-white transition-all duration-500">04</span>
                        <span class="text-[11px] font-black uppercase tracking-[0.2em] text-grey-dark">Fast Delivery</span>
                    </div>
                </div>
            </div>

            <!-- Right Visuals (Triple Circles Responsive) -->
            <div class="relative h-[400px] md:h-[600px] flex items-center justify-center mt-20 lg:mt-0" data-aos="fade-left">
                <!-- Large Center Circle -->
                <div class="w-48 h-48 md:w-80 md:h-80 rounded-full border-[8px] md:border-[15px] border-white shadow-2xl overflow-hidden z-10 transform -translate-x-5 -translate-y-5 md:-translate-x-10 md:-translate-y-10 hover:scale-105 transition-transform duration-700">
                    <img src="{{ asset('images/1.png') }}" class="w-full h-full object-cover">
                </div>
                <!-- Top Left Circle -->
                <div class="absolute top-5 left-4 md:top-10 md:left-0 w-36 h-36 md:w-64 md:h-64 rounded-full border-[6px] md:border-[12px] border-white/80 shadow-2xl overflow-hidden z-0 transform hover:scale-110 transition-transform duration-700">
                    <img src="https://images.unsplash.com/photo-1556906781-9a412961c28c?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover">
                </div>
                <!-- Bottom Right Circle -->
                <div class="absolute bottom-5 right-4 md:bottom-10 md:right-0 w-40 h-40 md:w-72 md:h-72 rounded-full border-[6px] md:border-[12px] border-white/80 shadow-2xl overflow-hidden z-20 transform hover:scale-110 transition-transform duration-700">
                    <img src="{{ asset('images/2.png') }}" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Section -->
<section class="py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-20 text-center" data-aos="fade-up">
            <h2 class="text-5xl font-black tracking-tight uppercase italic text-center text-grey-dark">OUR COLLECTIONS</h2>
            <div class="h-2 w-32 bg-grey-dark mx-auto mt-6 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @forelse($categories as $index => $category)
            <div class="group relative aspect-[4/5] overflow-hidden bg-grey-light rounded-2xl shadow-2xl" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-125">
                @else
                <div class="w-full h-full flex items-center justify-center text-3xl font-black uppercase italic opacity-10">{{ $category->name }}</div>
                @endif
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                
                <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-y-8 group-hover:translate-y-0">
                    <h3 class="text-3xl font-black text-white uppercase italic tracking-tight mb-6 text-center drop-shadow-lg">{{ $category->name }}</h3>
                    <a href="{{ route('category.detail', $category->id) }}" class="px-8 py-3 bg-white text-grey-dark font-black uppercase tracking-widest text-[11px] hover:bg-grey-dark hover:text-white transition-all duration-500 rounded-full shadow-2xl inline-block">
                        View Collection
                    </a>
                </div>
                
                <div class="absolute bottom-8 left-0 w-full group-hover:opacity-0 transition-all duration-500 transform group-hover:translate-y-4">
                    <h3 class="text-2xl font-black text-white uppercase italic tracking-tight text-center drop-shadow-lg">{{ $category->name }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-20">
                <p class="text-xl font-bold opacity-20 uppercase tracking-[0.3em] italic text-center">No collections found.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- Production Section -->
<section class="py-40 bg-grey-dark text-white overflow-hidden relative">
    <div class="absolute inset-0 bg-[radial-gradient(circle,rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <!-- Left Visual (Tilted Square) -->
            <div class="relative flex items-center justify-center lg:justify-start" data-aos="fade-right">
                <div class="relative group/prod">
                    <div class="w-80 h-80 md:w-[450px] md:h-[450px] bg-white rounded-3xl overflow-hidden shadow-[0_50px_100px_rgba(0,0,0,0.3)] transform -rotate-6 group-hover/prod:rotate-0 group-hover/prod:scale-105 transition-all duration-700 border-[12px] border-white/10 relative z-10">
                        <img src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover/prod:grayscale-0 transition-all duration-1000">
                        <div class="absolute inset-0 bg-grey-dark/20 group-hover:bg-transparent transition-colors duration-700"></div>
                    </div>
                    <!-- Decorative Background -->
                    <div class="absolute inset-0 w-80 h-80 md:w-[450px] md:h-[450px] border-4 border-white/10 rounded-3xl -z-10 transform translate-x-8 translate-y-8 group-hover/prod:translate-x-4 group-hover/prod:translate-y-4 transition-transform duration-700"></div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="space-y-12" data-aos="fade-left">
                <div class="space-y-6">
                    <span class="inline-block px-5 py-2 bg-white/10 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-[0.4em] rounded-full border border-white/20">Manufacturing Process</span>
                    <h2 class="text-5xl md:text-7xl font-black tracking-tighter uppercase italic text-white leading-[0.8]">
                        ELITE <br><span class="text-orange-400">PRODUCTION</span>
                    </h2>
                </div>
                <div class="grid grid-cols-1 gap-10">
                    <div class="flex items-start space-x-6 group">
                        <div class="text-4xl font-black italic text-white group-hover:text-orange-400 transition-colors duration-500">01</div>
                        <div>
                            <h4 class="text-xl font-black uppercase italic mb-2 text-white">Sample Development</h4>
                            <p class="text-sm text-white/80 leading-relaxed">Rapid prototyping and elite sample creation to perfect your design with precision.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6 group">
                        <div class="text-4xl font-black italic text-white group-hover:text-orange-400 transition-colors duration-500">02</div>
                        <div>
                            <h4 class="text-xl font-black uppercase italic mb-2 text-white">Bulk Production</h4>
                            <p class="text-sm text-white/80 leading-relaxed">High-capacity manufacturing lines for global orders of any scale and complexity.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6 group">
                        <div class="text-4xl font-black italic text-white group-hover:text-orange-400 transition-colors duration-500">03</div>
                        <div>
                            <h4 class="text-xl font-black uppercase italic mb-2 text-white">Quality Control</h4>
                            <p class="text-sm text-white/80 leading-relaxed">Rigorous 5-point military-grade inspection process for every single garment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-40 bg-white text-center overflow-hidden relative">
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10" data-aos="zoom-in" data-aos-duration="1000">
        <h2 class="text-6xl md:text-[110px] font-black tracking-tight uppercase italic text-grey-dark mb-12 text-center leading-[0.8] drop-shadow-sm">READY TO <span class="text-grey-accent">RISE?</span></h2>
        <p class="text-2xl text-grey-accent mb-16 uppercase tracking-[0.3em] font-bold text-center italic">Start your next private label project with us today.</p>
        <a href="{{ route('contact') }}" class="px-16 py-8 bg-grey-dark text-white text-center font-black uppercase tracking-widest text-lg hover:bg-grey-accent transition-all duration-500 shadow-[0_20px_50px_rgba(0,0,0,0.2)] rounded-full inline-block transform hover:scale-110 hover:rotate-2">
            Contact Us Now
        </a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 2500,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    });
</script>
@endsection