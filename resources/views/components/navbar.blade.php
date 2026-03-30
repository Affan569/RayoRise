<div class="fixed top-0 left-0 w-full z-50 pt-6 md:pt-10 px-4 md:px-[10%] pointer-events-none" x-data="{ mobileMenuOpen: false }">
    <nav class="bg-white/90 backdrop-blur-xl border border-grey-dark/5 rounded-full shadow-[0_30px_100px_rgba(0,0,0,0.1)] transition-all duration-500 pointer-events-auto group hover:bg-white hover:border-grey-dark/10">
        <div class="max-w-7xl mx-auto px-6 md:px-14">
            <div class="flex justify-between h-16 md:h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 md:space-x-4 group/logo">
                        <div class="relative">
                            <img src="{{ asset('images/logo.png') }}" alt="Rayo Rise Logo" class="h-8 md:h-10 w-auto group-hover/logo:rotate-[360deg] transition-transform duration-1000 relative z-10">
                            <div class="absolute inset-0 bg-grey-accent/20 blur-xl rounded-full opacity-0 group-hover/logo:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <span class="text-lg md:text-2xl font-black tracking-tighter uppercase italic text-glow text-grey-dark">
                            RAYO <span class="text-grey-accent">RISE</span>
                        </span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="font-black hover:text-white hover:bg-grey-dark px-6 py-2.5 rounded-full transition-all duration-500 uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('home') ? 'bg-grey-light text-grey-dark' : 'text-grey-dark/60' }}">HOME</a>
                    <a href="{{ route('about') }}" class="font-black hover:text-white hover:bg-grey-dark px-6 py-2.5 rounded-full transition-all duration-500 uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('about') ? 'bg-grey-light text-grey-dark' : 'text-grey-dark/60' }}">ABOUT</a>
                    <a href="{{ route('categories') }}" class="font-black hover:text-white hover:bg-grey-dark px-6 py-2.5 rounded-full transition-all duration-500 uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('categories') ? 'bg-grey-light text-grey-dark' : 'text-grey-dark/60' }}">COLLECTIONS</a>
                    <a href="{{ route('contact') }}" class="font-black hover:text-white hover:bg-grey-dark px-6 py-2.5 rounded-full transition-all duration-500 uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('contact') ? 'bg-grey-light text-grey-dark' : 'text-grey-dark/60' }}">CONTACT</a>
                    
                    <a href="{{ route('cart.index') }}" class="ml-6 relative group/cart p-3.5 bg-grey-light/50 hover:bg-grey-dark transition-all duration-500 rounded-full shadow-sm hover:shadow-xl">
                        <svg class="w-5 h-5 text-grey-dark group-hover/cart:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        @if(session('cart') && count(session('cart')) > 0)
                        <span class="absolute -top-1 -right-1 bg-grey-dark text-white text-[8px] font-black px-2 py-0.5 rounded-full border-2 border-white shadow-md animate-bounce">
                            {{ count(session('cart')) }}
                        </span>
                        @endif
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center space-x-4">
                    <a href="{{ route('cart.index') }}" class="relative group/cart p-2 bg-grey-light/50 rounded-full">
                        <svg class="w-5 h-5 text-grey-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        @if(session('cart') && count(session('cart')) > 0)
                        <span class="absolute -top-1 -right-1 bg-grey-dark text-white text-[7px] font-black px-1.5 py-0.5 rounded-full border border-white">
                            {{ count(session('cart')) }}
                        </span>
                        @endif
                    </a>
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-full text-grey-dark hover:bg-grey-light focus:outline-none transition-all">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="mobileMenuOpen ? 'hidden' : 'block'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            <path :class="mobileMenuOpen ? 'block' : 'hidden'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-10"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-10"
             class="md:hidden bg-white rounded-b-[40px] border-t border-grey-light overflow-hidden shadow-2xl">
            <div class="px-6 py-10 space-y-4">
                <a href="{{ route('home') }}" class="block px-6 py-4 rounded-2xl font-black uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('home') ? 'bg-grey-dark text-white shadow-xl' : 'text-grey-dark/60 hover:bg-grey-light' }}">HOME</a>
                <a href="{{ route('about') }}" class="block px-6 py-4 rounded-2xl font-black uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('about') ? 'bg-grey-dark text-white shadow-xl' : 'text-grey-dark/60 hover:bg-grey-light' }}">ABOUT</a>
                <a href="{{ route('categories') }}" class="block px-6 py-4 rounded-2xl font-black uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('categories') ? 'bg-grey-dark text-white shadow-xl' : 'text-grey-dark/60 hover:bg-grey-light' }}">COLLECTIONS</a>
                <a href="{{ route('contact') }}" class="block px-6 py-4 rounded-2xl font-black uppercase tracking-[0.3em] text-[12px] {{ request()->routeIs('contact') ? 'bg-grey-dark text-white shadow-xl' : 'text-grey-dark/60 hover:bg-grey-light' }}">CONTACT</a>
            </div>
        </div>
    </nav>
</div>