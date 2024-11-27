<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/billing-info',[HomeController::class,'billingInformation'])->name('billing-info');
Route::get('/cart-info',[HomeController::class,'cartInfo'])->name('cart-info');
Route::get('/delivery-info',[HomeController::class,'deliveryInfo'])->name('delivery-info');
Route::get('/order',[HomeController::class,'order'])->name('order');

Route::get('/product-details',[HomeController::class,'productDetails'])->name('product-details');

Route::get('/product-wishlist',[HomeController::class,'wishlist'])->name('product-wishlist');



Route::get('/dashboard',[AdminController::class,'admin'])->name('admin');
Route::get('/category',[AdminController::class,'category'])->name('category');
Route::post('/add-category',[AdminController::class,'addCategory'])->name('add-category');
Route::get('/show-category',[AdminController::class,'showCategory'])->name('show-category');
Route::get('/delete-category/{id}',[AdminController::class,'deleteCategory'])->name('delete-category');


Route::get('/product',[AdminController::class,'product'])->name('product');
Route::post('/add-product',[AdminController::class,'addProduct'])->name('add-product');
Route::get('/show-product',[AdminController::class,'showProduct'])->name('show-product');