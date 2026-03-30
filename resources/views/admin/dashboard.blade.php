@extends('layouts.admin')

@section('content')
<div class="mb-10" data-aos="fade-down">
    <h1 class="text-2xl font-black tracking-tight uppercase italic text-admin-primary mb-1">ADMIN DASHBOARD</h1>
    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-admin-accent">Welcome back, Rayo Rise Admin</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="admin-card transition-all duration-300 hover:border-admin-primary/20 group" data-aos="fade-up" data-aos-delay="0">
        <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-admin-accent mb-4 group-hover:text-admin-primary transition-colors">TOTAL PRODUCTS</h4>
        <p class="text-4xl font-black text-admin-primary italic tracking-tighter">{{ $totalProducts }}</p>
    </div>
    <div class="admin-card transition-all duration-300 hover:border-admin-primary/20 group" data-aos="fade-up" data-aos-delay="200">
        <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-admin-accent mb-4 group-hover:text-admin-primary transition-colors">TOTAL CATEGORIES</h4>
        <p class="text-4xl font-black text-admin-primary italic tracking-tighter">{{ $totalCategories }}</p>
    </div>
    <div class="admin-card transition-all duration-300 hover:border-admin-primary/20 group" data-aos="fade-up" data-aos-delay="400">
        <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-admin-accent mb-4 group-hover:text-admin-primary transition-colors">TOTAL INQUIRIES</h4>
        <p class="text-4xl font-black text-admin-primary italic tracking-tighter">{{ $totalInquiries }}</p>
    </div>
</div>

<div class="admin-card" data-aos="fade-up" data-aos-delay="600">
    <div class="flex items-center justify-between mb-8">
        <h3 class="text-lg font-black uppercase italic text-admin-primary">RECENT INQUIRIES</h3>
        <a href="{{ route('admin.inquiries.index') }}" class="text-[9px] font-black uppercase tracking-widest text-admin-accent hover:text-admin-primary transition">View All</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-admin-border">
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">NAME</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">EMAIL</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">STATUS</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">DATE</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-admin-border">
                @foreach($recentInquiries as $inquiry)
                <tr class="group hover:bg-admin-secondary/50 transition duration-200">
                    <td class="py-4 text-[11px] font-black uppercase tracking-widest text-admin-primary group-hover:text-black">{{ $inquiry->name }}</td>
                    <td class="py-4 text-[11px] font-bold lowercase italic text-admin-accent group-hover:text-admin-primary">{{ $inquiry->email }}</td>
                    <td class="py-4">
                        <span class="px-3 py-1 {{ $inquiry->status === 'new' ? 'bg-red-50 text-red-600' : 'bg-green-50 text-green-600' }} font-black uppercase italic tracking-widest text-[8px] rounded-lg border border-current/20">
                            {{ $inquiry->status }}
                        </span>
                    </td>
                    <td class="py-4 text-[10px] font-bold text-admin-accent group-hover:text-admin-primary">{{ $inquiry->created_at->format('M d, Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection