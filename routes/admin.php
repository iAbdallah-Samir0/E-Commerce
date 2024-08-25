<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', static function () {
    return redirect()->route('login');
})->name('home')->middleware('guest:admin');

Route::group([ 'as' => 'auth.'], static function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'submit'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => ['is-admin']], static function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('admins',AdminsController::class);
    Route::resource('users',UsersController::class);
    Route::resource('products', ProductController::class);
    Route::resource('brands', BrandsController::class);
    Route::resource('categories', CategoriesController::class);
});
