@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-end mb-10" data-aos="fade-down">
    <div>
        <h1 class="text-2xl font-black tracking-tight uppercase italic text-admin-primary mb-1">PRODUCT MANAGEMENT</h1>
        <p class="text-[10px] font-black uppercase tracking-[0.3em] text-admin-accent">Manage your product catalog</p>
    </div>
    <a href="{{ route('admin.products.create') }}" class="px-6 py-3 bg-admin-primary text-white font-black uppercase tracking-widest text-[10px] hover:shadow-xl hover:-translate-y-1 transition-all duration-300 rounded-2xl flex items-center space-x-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        <span>Add Product</span>
    </a>
</div>

<div class="admin-card" data-aos="fade-up">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-admin-border">
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">NAME</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">CATEGORY</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent text-right">ACTIONS</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-admin-border">
                @foreach($products as $product)
                <tr class="group hover:bg-admin-secondary/50 transition duration-200">
                    <td class="py-4 text-[11px] font-black uppercase tracking-widest text-admin-primary group-hover:text-black">{{ $product->name }}</td>
                    <td class="py-4 text-[11px] font-black uppercase tracking-widest text-admin-accent group-hover:text-admin-primary">{{ $product->category->name }}</td>
                    <td class="py-4 text-right space-x-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="inline-flex p-2 text-admin-accent hover:text-admin-primary hover:bg-admin-secondary rounded-xl transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-red-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection