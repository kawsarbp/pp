<?php

use App\Http\Controllers\Frontend\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*frontend page routes*/
Route::get('/',[SiteController::class,'index'])->name('homePage');
Route::get('/contact',[SiteController::class,'contact'])->name('contactPage');
Route::get('/home',[SiteController::class,'home'])->name('user.home');
Route::get('/contact-us',[SiteController::class,'contactUs'])->name('user.contactUs');
Route::get('/about-us',[SiteController::class,'aboutUs'])->name('user.aboutUs');
Route::get('/blog',[SiteController::class,'blog'])->name('user.blog');
Route::get('/cart',[SiteController::class,'addToCart'])->name('user.addToCart');
Route::get('/my-wishlist',[SiteController::class,'myWishlist'])->name('user.myWishlist');
Route::get('/profile/dashboard',[SiteController::class,'userDashboard'])->name('user.dashboard');
Route::get('/my-purchase-histories',[SiteController::class,'myHistories'])->name('user.myHistories');
Route::get('/checkout',[SiteController::class,'checkout'])->name('user.checkout');
Route::get('/checkout',[SiteController::class,'checkout'])->name('user.checkout');
