<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\paypalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*frontend page routes*/
Route::get('/',[SiteController::class,'index'])->name('homePage');
Route::get('/contact',[SiteController::class,'contact'])->name('contactPage');
Route::get('/user/profile',[SiteController::class,'userProfile'])->name('userProfile');
Route::post('/user/profile/edit/{id}',[SiteController::class,'userProfileEdit'])->name('userProfileEdit');
Route::get('/home',[SiteController::class,'home'])->name('user.home');
Route::get('/contact-us',[SiteController::class,'contactUs'])->name('user.contactUs');
Route::get('/about-us',[SiteController::class,'aboutUs'])->name('user.aboutUs');
Route::get('/blog',[SiteController::class,'blog'])->name('user.blog');
Route::get('/blog-post/{id}',[SiteController::class,'blogPost'])->name('user.blogPost');
Route::get('/blog-search',[SiteController::class,'blogSearch'])->name('user.blogSearch');
Route::get('/add-cart/{id?}',[SiteController::class,'addToCart'])->name('user.addToCart');
Route::get('/cart/',[SiteController::class,'cart'])->name('user.Cart');
Route::get('/my-wishlist',[SiteController::class,'myWishlist'])->name('user.myWishlist');
Route::get('/my-wishlist-alert',[SiteController::class,'myWishlistAlert'])->name('user.myWishlistAlert');
Route::get('/delete-my-wishlist/{id?}',[SiteController::class,'myWishlistDelete'])->name('user.myWishlistDelete');
Route::get('/add-to-wishlist/{id?}',[SiteController::class,'addToWishlist'])->name('user.addToWishlist');
Route::get('/profile/dashboard',[SiteController::class,'userDashboard'])->name('user.dashboard');
Route::get('/my-purchase-histories',[SiteController::class,'myHistories'])->name('user.myHistories');
Route::get('/my-purchase-order',[SiteController::class,'myPurchaseOrder'])->name('user.myPurchaseOrder');
Route::get('/checkout',[SiteController::class,'checkout'])->name('user.checkout');
Route::post('/user-update/{id}',[SiteController::class,'userUpdate'])->name('user.userUpdate');
Route::get('/shipping-method',[SiteController::class,'shippingMethod'])->name('user.shippingMethod');
Route::get('/payment-option',[SiteController::class,'paymentOption'])->name('user.paymentOption');
Route::get('/payment-method',[SiteController::class,'paymentMethod'])->name('user.paymentMethod');
Route::get('/payment/{totalprice?}',[OrderController::class,'payment'])->name('user.payment');
Route::get('/order-details',[SiteController::class,'orderDetails'])->name('user.orderDetails');
Route::get('/product-details/{id?}',[SiteController::class,'productDetails'])->name('user.productDetails');
Route::get('/cancel-order/{id?}',[OrderController::class,'cancelOrder'])->name('user.cancelOrder');
Route::get('/download-invoice/{id?}',[OrderController::class,'downloadInvoice'])->name('user.downloadInvoice');
Route::get('/category-product/{id?}',[SiteController::class,'categoryProduct'])->name('user.categoryProduct');
Route::post('/message-store',[MessageController::class,'message'])->name('user.message');

/*backend page routes*/
/*logout*/
Route::post('/logout',[DashboardController::class,'logout'])->name('logout');
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    /*redirect route*/
    Route::get('/dashboard',[RedirectController::class,'redirect'])->name('dashboard');
    /*blog*/
    Route::prefix('/blog')->name('blog.')->group(function (){
        Route::get('/add-blog',[BlogController::class,'addBlog'])->name('addBlog');
        Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manageBlog');
        Route::post('/store',[BlogController::class,'store'])->name('store');
        Route::delete('/destroy/{id}',[BlogController::class,'destroy'])->name('destroy');
        Route::get('/edit/{id}',[BlogController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[BlogController::class,'update'])->name('update');
        Route::get('/show/{id}',[BlogController::class,'show'])->name('show');
        Route::put('/blog-status/{id}',[BlogController::class,'blogStatus'])->name('blogStatus');
    });

    /*category*/
    Route::prefix('/category')->name('category.')->group(function (){
        Route::get('/index',[CategoryController::class,'index'])->name('index');
        Route::get('/category-create',[CategoryController::class,'categoryCreate'])->name('categoryCreate');
        Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('categoryStore');
        Route::delete('/category-destroy/{id}',[CategoryController::class,'categoryDestroy'])->name('categoryDestroy');
        Route::get('/category-edit/{id}',[CategoryController::class,'categoryEdit'])->name('categoryEdit');
        Route::put('/category-edit/{id}',[CategoryController::class,'categoryUpdate'])->name('categoryUpdate');
        Route::put('/category-status/{id}',[CategoryController::class,'categoryStatus'])->name('categoryStatus');
    });
    /*subcategory*/
    Route::prefix('/subcategory')->name('subcategory.')->group(function (){
        Route::get('/index',[SubcategoryController::class,'index'])->name('index');
        Route::get('/subcategory-create',[SubcategoryController::class,'subcategoryCreate'])->name('subcategoryCreate');
        Route::post('/subcategory-store',[SubcategoryController::class,'subcategoryStore'])->name('subcategoryStore');
        Route::delete('/subcategory-destroy/{id}',[SubcategoryController::class,'subcategoryDestroy'])->name('subcategoryDestroy');
        Route::get('/subcategory-edit/{id}',[SubcategoryController::class,'subcategoryEdit'])->name('subcategoryEdit');
        Route::put('/subcategory-edit/{id}',[SubcategoryController::class,'subcategoryUpdate'])->name('subcategoryUpdate');
        Route::put('/subcategory-status/{id}',[SubcategoryController::class,'subcategoryStatus'])->name('subcategoryStatus');
    });
    /*brand*/
    Route::prefix('/brand')->name('brand.')->group(function (){
        Route::get('/index',[BrandController::class,'index'])->name('index');
        Route::get('/create',[BrandController::class,'create'])->name('create');
        Route::post('/store',[BrandController::class,'store'])->name('store');
        Route::put('/brand-status/{id}',[BrandController::class,'brandStatus'])->name('brandStatus');
        Route::delete('/brand-destroy/{id}',[BrandController::class,'destroy'])->name('destroy');
        Route::get('/brand-edit/{id}',[BrandController::class,'edit'])->name('brandEdit');
        Route::put('/brand-update/{id}',[BrandController::class,'update'])->name('update');
    });
    /*product*/
    Route::prefix('/product')->name('product.')->group(function (){
        Route::get('/index',[ProductController::class,'index'])->name('index');
        Route::get('/create',[ProductController::class,'create'])->name('create');
        Route::post('/store',[ProductController::class,'store'])->name('store');
        Route::put('/product-status/{id}',[ProductController::class,'productStatus'])->name('productStatus');
        Route::delete('/destroy/{id}',[ProductController::class,'destroy'])->name('destroy');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[ProductController::class,'update'])->name('update');
        Route::get('/show/{id}',[ProductController::class,'show'])->name('show');
    });
    /*customer info*/
    Route::prefix('/order')->name('order.')->group(function (){
        Route::get('/index',[OrderController::class,'index'])->name('index');
        Route::get('/view/{id?}',[OrderController::class,'view'])->name('view');
        Route::get('/payment-status-change/{id?}',[OrderController::class,'paymentStatusChange'])->name('paymentStatusChange');
        Route::get('/payment-status-rechived/{id?}',[OrderController::class,'paymentStatusRechived'])->name('paymentStatusRechived');
        Route::get('/payment-status-cancel/{id?}',[OrderController::class,'paymentStatusCancel'])->name('paymentStatusCancel');
        Route::get('/order-remove/{id?}',[OrderController::class,'orderRemove'])->name('orderRemove');
    });

    /*stripe payment*/
    Route::post('/stripe/{totalprice}',[OrderController::class,'stripePost'])->name('stripe.post');
    /*paypal view*/
    //Route::get('/paypal',[PaypalController::class,'paypalView'])->name('paypalView');
    Route::get('/processPaypal/{totalprice?}',[PaypalController::class,'processPaypal'])->name('processPaypal');
    Route::get('/processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');
    Route::get('/processCancel',[PaypalController::class,'processCancel'])->name('processCancel');

    /*message controller*/
    Route::prefix('/message')->name('message.')->group(function (){
        Route::get('/index',[MessageController::class,'messageIndex'])->name('messageIndex');
    });



});
