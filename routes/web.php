<?php

use Illuminate\Support\Facades\Route;

use App\Models\Subcategory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\ProductSoldController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('userInfo', UserInfoController::class);
Route::resource('product', ProductController::class);
Route::get('products/{category}', [ProductController::class, 'byCat'])->name('by-category');
Route::get('products/{category}/{subcategory}', [ProductController::class, 'bySubCat'])->name('by-subcategory');
Route::get('products/{user}', [ProductController::class, 'byUser'])->name('by-user');
Route::get('my-products', [ProductController::class, 'myProducts'])->name('my-products');
Route::get('my-sold-products', [ProductController::class, 'mySoldProducts'])->name('my-sold-products');
Route::get('my-buyed-products', [ProductController::class, 'myBuyedProducts'])->name('my-buyed-products');
Route::get('price-offers', [ProductController::class, 'priceOffers'])->name('price-offers');
Route::get('price-offers/{product}', [ProductController::class, 'priceOffersBy'])->name('price-offersBy');
Route::get('user/{user}', [ProductController::class, 'user'])->name('user');

Route::get('messages', [MessageController::class, 'index'])->name('messages-index');

Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('cart/{product}', [CartController::class, 'show'])->name('cart-product');
Route::post('cart', [CartController::class, 'store'])->name('cart-store');


Route::post('solds', [ProductSoldController::class, 'store'])->name('sold-store');


Route::get('subcategories', function (){
    
    $subcategories = Subcategory::where('category_id', 1)->get();
    return response()->json([$subcategories]);
});
Route::get('/dashboard', [UserInfoController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
