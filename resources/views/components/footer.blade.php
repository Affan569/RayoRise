<footer class="bg-grey-dark py-24 border-t border-white/5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
            <div class="space-y-8 text-center md:text-left" data-aos="fade-up">
                <a href="{{ route('home') }}" class="flex items-center justify-center md:justify-start space-x-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Rayo Rise Logo" class="h-14 w-auto brightness-0 invert group-hover:rotate-[360deg] transition-transform duration-700">
                    <span class="text-3xl font-black tracking-tighter uppercase italic text-white">
                        RAYO <span class="text-grey-accent">RISE</span>
                    </span>
                </a>
                <p class="text-white/50 text-base leading-relaxed font-medium text-center md:text-left">Premium UK 90s Football-Inspired B2B Manufacturing. Redefining heritage sportswear for the modern era.</p>
            </div>
            <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-lg font-black mb-8 uppercase italic tracking-tighter text-white text-center md:text-left">QUICK LINKS</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}" class="text-white/60 hover:text-white transition font-black uppercase tracking-widest text-[10px]">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white/60 hover:text-white transition font-black uppercase tracking-widest text-[10px]">About</a></li>
                    <li><a href="{{ route('categories') }}" class="text-white/60 hover:text-white transition font-black uppercase tracking-widest text-[10px]">Categories</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white/60 hover:text-white transition font-black uppercase tracking-widest text-[10px]">Contact</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="400">
                <h4 class="text-lg font-black mb-8 uppercase italic tracking-tighter text-white text-center md:text-left">CONTACT</h4>
                <div class="space-y-4 text-white/60 font-black uppercase tracking-widest text-[10px]">
                    <p>London, UK</p>
                    <p class="lowercase italic">contact@rayorise.com</p>
                    <p>+44 20 1234 5678</p>
                </div>
            </div>
            <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="600">
                <h4 class="text-lg font-black mb-8 uppercase italic tracking-tighter text-white text-center md:text-left">FOLLOW US</h4>
                <div class="flex justify-center md:justify-start space-x-6">
                    <a href="#" class="text-white/60 hover:text-white transition transform hover:scale-125">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.046 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="pt-12 border-t border-white/5 text-center">
            <p class="text-white/30 font-black uppercase tracking-[0.5em] text-[9px] text-center">
                &copy; {{ date('Y') }} RAYO RISE. THE PINNACLE OF FOOTBALL HERITAGE.
            </p>
        </div>
    </div>
</footer>