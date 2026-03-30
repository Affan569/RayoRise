<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Rayo Rise') }} - @yield('title', 'UK 90s Football-Inspired Track Suit Manufacturer')</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Tailwind 4 CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-grey-accent: #4B5563;
            --color-grey-light: #F3F4F6;
            --color-grey-dark: #111827;
            --font-sans: 'Space Grotesk', 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
        }
        @layer base {
            h1, h2, h3, h4, h5, h6 {
                @apply font-black tracking-tight uppercase italic text-center text-grey-dark;
            }
            body {
                @apply antialiased bg-white text-grey-dark text-center leading-relaxed;
            }
            p {
                @apply text-[15px] leading-relaxed text-grey-dark/80 font-medium;
            }
            span, div, a, li, input, textarea, button {
                @apply text-center;
            }
        }
        @layer components {
            .content-top-margin {
                @apply mt-[50px];
            }
            .btn-premium {
                @apply px-10 py-5 bg-grey-dark text-white font-black uppercase tracking-[0.3em] hover:bg-grey-accent transition-all duration-500 rounded-full shadow-[0_20px_40px_rgba(0,0,0,0.15)] text-[11px] text-center inline-block transform hover:-translate-y-1 active:scale-95;
            }
            .card-premium {
                @apply bg-white rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.05)] border border-grey-light/50 p-8 hover:shadow-[0_40px_80px_rgba(0,0,0,0.1)] transition-all duration-700 text-center;
            }
            .text-glow {
                text-shadow: 0 0 15px rgba(107, 114, 128, 0.15);
            }
        }
    </style>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-sans antialiased">
    <x-navbar />

    @if(session('success'))
    <div class="fixed top-24 left-1/2 transform -translate-x-1/2 z-[60] w-full max-w-md px-4 pointer-events-none">
        <div class="bg-grey-dark text-white p-6 rounded-full shadow-2xl text-center font-black uppercase italic tracking-widest text-xs border border-white/10 animate-bounce pointer-events-auto">
            {{ session('success') }}
        </div>
    </div>
    @endif

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    </script>
</body>
</html>