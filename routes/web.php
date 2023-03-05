<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\RedirectController;
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
Route::get('/shipping-method',[SiteController::class,'shippingMethod'])->name('user.shippingMethod');
Route::get('/payment-method',[SiteController::class,'paymentMethod'])->name('user.paymentMethod');
Route::get('/order-details',[SiteController::class,'orderDetails'])->name('user.orderDetails');
Route::get('/product-details',[SiteController::class,'productDetails'])->name('user.productDetails');

/*backend page routes*/
/*logout*/
Route::post('/logout',[DashboardController::class,'logout'])->name('logout');
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    /*redirect route*/
    Route::get('/dashboard',[RedirectController::class,'redirect'])->name('dashboard');
    /*blog*/
    Route::get('/add-blog',[DashboardController::class,'addBlog'])->name('addBlog');
    Route::get('/manage-blog',[DashboardController::class,'manageBlog'])->name('manageBlog');

});
