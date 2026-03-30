<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Rayo Rise</title>
    <!-- Tailwind 4 CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#111827] h-screen flex items-center justify-center font-sans antialiased">
    <div class="w-full max-w-md bg-white p-12 rounded-[40px] shadow-2xl border border-white/10 relative overflow-hidden">
        <!-- Background Accent -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#111827]/5 rounded-full blur-3xl"></div>
        
        <div class="text-center mb-12 relative">
            <img src="{{ asset('images/logo.png') }}" alt="Rayo Rise Logo" class="h-16 w-auto mx-auto mb-6 grayscale brightness-0">
            <h1 class="text-3xl font-black tracking-tighter uppercase italic text-[#111827]">RAYO <span class="text-gray-400">PRO</span></h1>
            <p class="text-[9px] font-black uppercase tracking-[0.4em] text-gray-400 mt-3">Elite Production Access</p>
        </div>

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-8 relative">
            @csrf
            
            @if($errors->any())
            <div class="p-4 bg-red-50 text-red-600 font-black uppercase italic tracking-widest text-[9px] rounded-2xl border border-red-100 animate-shake">
                {{ $errors->first() }}
            </div>
            @endif

            <div class="space-y-3">
                <label class="block text-[10px] font-black uppercase tracking-widest text-[#111827] ml-2">Secure Email</label>
                <input type="email" name="email" class="w-full bg-gray-50 border border-gray-100 p-4 text-[11px] font-bold tracking-widest focus:border-[#111827] focus:bg-white outline-none transition-all duration-300 rounded-2xl text-black" placeholder="admin@rayorise.com" required>
            </div>

            <div class="space-y-3">
                <label class="block text-[10px] font-black uppercase tracking-widest text-[#111827] ml-2">Access Key</label>
                <input type="password" name="password" class="w-full bg-gray-50 border border-gray-100 p-4 text-[11px] font-bold tracking-widest focus:border-[#111827] focus:bg-white outline-none transition-all duration-300 rounded-2xl text-black" placeholder="••••••••" required>
            </div>

            <div class="flex items-center justify-between px-2">
                <div class="flex items-center space-x-3 group cursor-pointer">
                    <input type="checkbox" name="remember" id="remember" class="w-4 h-4 border-2 border-gray-200 rounded-lg checked:bg-[#111827] transition-all">
                    <label for="remember" class="text-[9px] font-black uppercase tracking-widest text-gray-400 group-hover:text-[#111827] transition-colors">Keep Session</label>
                </div>
            </div>

            <button type="submit" class="w-full py-5 bg-[#111827] text-white font-black uppercase tracking-[0.3em] text-[10px] hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 rounded-2xl">
                Authorize Entry
            </button>
        </form>
    </div>
</body>
</html>