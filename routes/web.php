<?php

use App\Http\Controllers\About;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [AppController::class,'index'])->name('app.index');
Route::get('/shop', [ShopController::class,'index'])->name('shop.index');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('cart/clear',[CartController::class, 'clearCart'])->name('cart.clear');
Route::get('/about-us', [AboutusController::class,'index'])->name('about-us.index');
Route::get('/contact-us', [ContactusController::class,'index'])->name('contact-us.index');
Route::get('/blog', [BlogController::class,'index'])->name('blog.index');
Route::get('/wishlist', [WishlistController::class,'index'])->name('wishlist.index');
//Route::post('/wishlist/store', [WishlistController::class,'addToWishlist'])->name('wishlist.store');
//Route::put('wishlist/update',[WishlistController::class,'updateWishlist'])->name('wishlist.update');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout.index');
Route::get('/product/{slug}', [ShopController::class,'productDetails'])->name('shop.product.details');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/My-Account' , [UserController::class, 'index'])->name('user.index');

//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth','auth.admin')->group(function () {
    Route::get('/Admin', [AdminController::class, 'index'])->name('admin.index');
});


require __DIR__.'/auth.php';
