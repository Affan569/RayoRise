@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <h1 class="text-6xl font-black tracking-tighter uppercase italic text-glow text-indigo-900 mb-4 animate-pulse">ADD NEW PRODUCT</h1>
    <p class="text-xl font-bold uppercase tracking-widest text-gray-500">Create a new product listing</p>
</div>

<div class="bg-white p-12 md:p-20 rounded-sm shadow-2xl border-t-8 border-indigo-600 transition-colors duration-300">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
        @csrf
        
        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Category</label>
            <select name="category_id" class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Product Name</label>
            <input type="text" name="name" class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black" required>
        </div>

        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Description</label>
            <textarea name="description" rows="6" class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black"></textarea>
        </div>

        <div class="space-y-4">
            <label class="block text-xl font-black uppercase italic text-glow tracking-tighter text-indigo-900">Product Images (Multiple)</label>
            <input type="file" name="images[]" multiple class="w-full bg-gray-100 border-4 border-gray-200 p-6 text-xl font-bold uppercase tracking-widest focus:border-indigo-500 outline-none transition-all duration-300 rounded-sm text-black">
        </div>

        <div class="flex space-x-6">
            <button type="submit" class="px-16 py-8 bg-indigo-600 text-white font-black uppercase tracking-widest text-2xl hover:scale-105 transition-transform duration-300 shadow-2xl rounded-sm">
                Create Product
            </button>
            <a href="{{ route('admin.products.index') }}" class="px-16 py-8 bg-gray-200 text-gray-500 font-black uppercase tracking-widest text-2xl hover:bg-gray-300 transition-all duration-300 rounded-sm">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection