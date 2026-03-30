<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Rayo Rise</title>
    <!-- Tailwind 4 CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-admin-primary: #111827;
            --color-admin-secondary: #F9FAFB;
            --color-admin-accent: #4B5563;
            --color-admin-border: #E5E7EB;
        }
        @layer base {
            h1, h2, h3, h4, h5, h6 {
                @apply font-black tracking-tight uppercase italic text-admin-primary;
            }
            body {
                @apply bg-white text-admin-primary text-[13px] antialiased;
            }
        }
        .sidebar-transition {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        [x-cloak] { display: none !important; }
        
        .admin-card {
            @apply bg-white border border-admin-border rounded-[24px] shadow-[0_10px_40px_rgba(0,0,0,0.03)] p-6 hover:shadow-[0_20px_60px_rgba(0,0,0,0.06)] transition-all duration-500;
        }
        
        .nav-link {
            @apply flex items-center space-x-3 p-3.5 rounded-2xl font-black uppercase tracking-widest text-[10px] transition-all duration-300;
        }
        .nav-link-active {
            @apply bg-admin-primary text-white shadow-xl translate-x-1;
        }
        .nav-link-inactive {
            @apply text-admin-accent hover:bg-admin-secondary hover:text-admin-primary;
        }
    </style>
</head>
<body class="bg-white font-sans antialiased" x-data="{ sidebarOpen: window.innerWidth > 1024 }">
    <div class="flex h-screen overflow-hidden relative">
        <!-- Sidebar Overlay (Mobile) -->
        <div x-show="sidebarOpen && window.innerWidth < 1024" 
             @click="sidebarOpen = false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-admin-primary/40 backdrop-blur-sm z-40 lg:hidden"></div>

        <!-- Sidebar -->
        <aside 
            :class="sidebarOpen ? 'w-64 translate-x-0' : 'w-0 -translate-x-full lg:w-0'"
            class="sidebar-transition bg-white text-admin-primary flex-shrink-0 border-r border-admin-border z-50 fixed lg:relative h-full">
            <div class="p-8 flex items-center justify-center overflow-hidden whitespace-nowrap border-b border-admin-border mb-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Rayo Rise Logo" class="h-10 w-auto">
                    <span class="text-2xl font-black tracking-tighter uppercase italic">
                        RAYO <span class="text-admin-accent">PRO</span>
                    </span>
                </a>
            </div>
            <nav class="px-4 space-y-2 overflow-hidden">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'nav-link-active' : 'nav-link-inactive' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Analytics</span>
                </a>
                <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.*') ? 'nav-link-active' : 'nav-link-inactive' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    <span>Collections</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'nav-link-active' : 'nav-link-inactive' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    <span>Inventory</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="nav-link {{ request()->routeIs('admin.inquiries.*') ? 'nav-link-active' : 'nav-link-inactive' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    <span>Inquiries</span>
                </a>
                
                <div class="pt-10 mt-10 border-t border-admin-border">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex items-center space-x-3 p-4 rounded-2xl font-black uppercase tracking-widest text-[10px] text-red-500 hover:bg-red-50 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span>Logout System</span>
                        </button>
                    </form>
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 p-4 rounded-2xl font-black uppercase tracking-widest text-[10px] text-admin-accent hover:bg-admin-secondary transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        <span>Live Preview</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0 bg-admin-secondary">
            <!-- Top Header Bar -->
            <header class="h-20 bg-white border-b border-admin-border flex items-center justify-between px-6 md:px-10 flex-shrink-0 relative z-30">
                <button @click="sidebarOpen = !sidebarOpen" class="p-3 rounded-2xl bg-admin-secondary text-admin-primary hover:bg-admin-primary hover:text-white transition-all duration-500 shadow-sm border border-admin-border/50">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div class="flex items-center space-x-6">
                    <div class="text-right hidden sm:block">
                        <p class="text-[11px] font-black uppercase tracking-[0.3em] text-admin-primary">Administrator</p>
                        <p class="text-[10px] font-bold uppercase text-admin-accent">Session: Elite Pro</p>
                    </div>
                    <div class="w-10 h-10 rounded-2xl bg-admin-primary flex items-center justify-center text-white font-black text-sm shadow-xl transform rotate-3">R</div>
                </div>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-10 lg:p-14">
                @if(session('success'))
                <div class="mb-10 p-5 bg-admin-primary text-white font-black uppercase tracking-widest text-[10px] rounded-2xl shadow-2xl border border-white/10 animate-fade-in flex items-center space-x-4" data-aos="fade-down">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>{{ session('success') }}</span>
                </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>