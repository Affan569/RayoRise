<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\AuthController;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/categories', [FrontendController::class, 'categories'])->name('categories');
Route::get('/category/{id}', [FrontendController::class, 'categoryDetail'])->name('category.detail');
Route::get('/product/{id}', [FrontendController::class, 'productDetail'])->name('product.detail');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'submitInquiry'])->name('contact.submit');

use App\Http\Controllers\CartController;

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/update-cart', [CartController::class, 'update'])->name('cart.update');
Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');

// Admin Auth Routes (Enabling authentication as requested)
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Routes (Protected with auth:admin)
Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
    Route::patch('inquiries/{id}/status', [InquiryController::class, 'updateStatus'])->name('inquiries.updateStatus');
    Route::delete('inquiries/{id}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
});
