@extends('layouts.app')

@section('title', 'Contact Us - Start Your Project With Rayo Rise')

@section('content')
<section class="py-32 bg-white overflow-hidden relative">
    <div class="absolute top-0 left-0 w-full h-64 bg-grey-light/30 -z-10 skew-y-2 transform origin-top-left"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-24" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-grey-dark text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-sm mb-6">Contact Us</span>
            <h1 class="text-6xl md:text-[100px] font-black tracking-tight uppercase italic text-grey-dark text-center leading-[0.8] mb-10">GET IN <span class="text-grey-accent">TOUCH</span></h1>
            <p class="text-xl font-bold uppercase tracking-[0.3em] text-grey-accent text-center max-w-2xl mx-auto">Partner with London's premier tracksuit manufacturer for your next collection.</p>
            <div class="h-1.5 w-32 bg-grey-dark mx-auto mt-12 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            <!-- Contact Info Cards -->
            <div class="lg:col-span-4 space-y-6" data-aos="fade-right">
                <div class="p-8 bg-grey-light/30 rounded-3xl border border-grey-dark/5 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-sm group-hover:bg-grey-dark group-hover:text-white transition-colors duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black uppercase italic text-grey-dark mb-2">Our Office</h4>
                    <p class="text-grey-accent font-bold uppercase text-xs tracking-widest">London, United Kingdom</p>
                </div>

                <div class="p-8 bg-grey-light/30 rounded-3xl border border-grey-dark/5 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-sm group-hover:bg-grey-dark group-hover:text-white transition-colors duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black uppercase italic text-grey-dark mb-2">Email Us</h4>
                    <p class="text-grey-accent font-bold lowercase italic text-sm tracking-widest">contact@rayorise.com</p>
                </div>

                <div class="p-8 bg-grey-light/30 rounded-3xl border border-grey-dark/5 hover:bg-white hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-sm group-hover:bg-grey-dark group-hover:text-white transition-colors duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 011.94.86l-.85 4.03a1 1 0 01-.67.76l-2.4 1.1a13.073 13.073 0 005.03 5.03l1.1-2.4a1 1 0 01.76-.67l4.03.85a1 1 0 01.86 1.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h4 class="text-xl font-black uppercase italic text-grey-dark mb-2">Call Support</h4>
                    <p class="text-grey-accent font-bold uppercase text-xs tracking-widest">+44 20 1234 5678</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-8 bg-white p-10 md:p-16 rounded-[40px] shadow-[0_30px_100px_rgba(0,0,0,0.08)] border border-grey-dark/5" data-aos="fade-left">
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-8">
                    @csrf
                    @if(request('product_id'))
                    <input type="hidden" name="product_id" value="{{ request('product_id') }}">
                    @endif
                    
                    @if(session('success'))
                    <div class="p-6 bg-grey-dark text-white font-black uppercase italic tracking-widest text-sm rounded-2xl shadow-xl animate-bounce text-center mb-10">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="block text-[10px] font-black uppercase tracking-[0.3em] text-grey-dark ml-4">Full Name</label>
                            <input type="text" name="name" placeholder="TALHA AHMED" class="w-full bg-grey-light/20 border-none p-6 text-xs font-black uppercase tracking-widest focus:ring-2 focus:ring-grey-dark outline-none transition-all duration-300 rounded-2xl" required>
                        </div>
                        <div class="space-y-3">
                            <label class="block text-[10px] font-black uppercase tracking-[0.3em] text-grey-dark ml-4">Email Address</label>
                            <input type="email" name="email" placeholder="ADMIN@RAYORISE.COM" class="w-full bg-grey-light/20 border-none p-6 text-xs font-black uppercase tracking-widest focus:ring-2 focus:ring-grey-dark outline-none transition-all duration-300 rounded-2xl" required>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="block text-[10px] font-black uppercase tracking-[0.3em] text-grey-dark ml-4">Your Inquiry Message</label>
                        <textarea name="message" rows="6" placeholder="DESCRIBE YOUR COLLECTION REQUIREMENTS..." class="w-full bg-grey-light/20 border-none p-6 text-xs font-black uppercase tracking-widest focus:ring-2 focus:ring-grey-dark outline-none transition-all duration-300 rounded-2xl resize-none" required></textarea>
                    </div>

                    <button type="submit" class="w-full py-8 bg-grey-dark text-white font-black uppercase tracking-[0.4em] text-xs hover:bg-grey-accent hover:shadow-[0_20px_50px_rgba(0,0,0,0.2)] transition-all duration-500 rounded-2xl transform hover:-translate-y-1">
                        Send Elite Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection