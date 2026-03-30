<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalInquiries = Inquiry::count();
        $recentInquiries = Inquiry::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalProducts', 'totalCategories', 'totalInquiries', 'recentInquiries'));
    }
}
