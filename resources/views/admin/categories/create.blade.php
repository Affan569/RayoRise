@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <h1 class="text-6xl font-black tracking-tighter uppercase italic text-glow text-indigo-900 mb-4 animate-pulse">ADD NEW CATEGORY</h1>
    <p class="text-xl font-bold uppercase tracking-widest text-gray-500">Create a new product collection</p>
</div>

<div class="bg-white p-12 md:p-20 rounded-sm shadow-2xl border-t-8 border-indigo-600 transition-colors duration-300">
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
        @csrf
        
        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Category Name</label>
            <input type="text" name="name" class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black" required>
        </div>

        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Category Background Image (For Homepage Card)</label>
            <input type="file" name="image" class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black" required>
            <p class="text-sm text-gray-500 font-bold uppercase tracking-widest mt-2">Note: This image will be used as the background for the category card on the homepage.</p>
        </div>

        <div class="flex space-x-6">
            <button type="submit" class="px-16 py-8 bg-indigo-600 text-white font-black uppercase tracking-widest text-2xl hover:scale-105 transition-transform duration-300 shadow-2xl rounded-sm">
                Create Category
            </button>
            <a href="{{ route('admin.categories.index') }}" class="px-16 py-8 bg-gray-200 text-gray-500 font-black uppercase tracking-widest text-2xl hover:bg-gray-300 transition-all duration-300 rounded-sm">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection