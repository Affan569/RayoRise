@extends('layouts.admin')

@section('content')
<div class="mb-10" data-aos="fade-down">
    <h1 class="text-2xl font-black tracking-tight uppercase italic text-admin-primary mb-1">INQUIRY MANAGEMENT</h1>
    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-admin-accent">View and manage customer inquiries</p>
</div>

<div class="admin-card" data-aos="fade-up">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-admin-border">
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">NAME</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">EMAIL</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">PRODUCT</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">MESSAGE</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent">STATUS</th>
                    <th class="py-4 text-[10px] font-black uppercase tracking-widest text-admin-accent text-right">ACTIONS</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-admin-border">
                @foreach($inquiries as $inquiry)
                <tr class="group hover:bg-admin-secondary/50 transition duration-200">
                    <td class="py-4 text-[11px] font-black uppercase tracking-widest text-admin-primary group-hover:text-black">{{ $inquiry->name }}</td>
                    <td class="py-4 text-[11px] font-bold lowercase italic text-admin-accent group-hover:text-admin-primary">{{ $inquiry->email }}</td>
                    <td class="py-4 text-[11px] font-black uppercase tracking-widest text-admin-primary">
                        {{ $inquiry->product ? $inquiry->product->name : 'General' }}
                    </td>
                    <td class="py-4 text-[11px] text-admin-accent max-w-xs truncate group-hover:text-admin-primary">{{ $inquiry->message }}</td>
                    <td class="py-4">
                        <form action="{{ route('admin.inquiries.updateStatus', $inquiry->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="status" onchange="this.form.submit()" class="px-3 py-1.5 {{ $inquiry->status === 'new' ? 'bg-red-50 text-red-600 border-red-200' : 'bg-green-50 text-green-600 border-green-200' }} font-black uppercase italic tracking-widest text-[8px] rounded-lg border outline-none cursor-pointer hover:scale-105 transition-transform">
                                <option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>NEW</option>
                                <option value="read" {{ $inquiry->status === 'read' ? 'selected' : '' }}>READ</option>
                            </select>
                        </form>
                    </td>
                    <td class="py-4 text-right">
                        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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