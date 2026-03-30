<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Inquiry;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::take(3)->get();
        $featuredProducts = Product::with('images')->latest()->take(8)->get();
        return view('frontend.home', compact('categories', 'featuredProducts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('frontend.categories', compact('categories'));
    }

    public function categoryDetail($id)
    {
        $category = Category::with('products.images')->findOrFail($id);
        return view('frontend.category-detail', compact('category'));
    }

    public function productDetail($id)
    {
        $product = Product::with(['category', 'images'])->findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();
        return view('frontend.product-detail', compact('product', 'relatedProducts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'product_id' => 'nullable|exists:products,id',
        ]);

        Inquiry::create($validated);

        return back()->with('success', 'Your inquiry has been submitted successfully!');
    }
}
