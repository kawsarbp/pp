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
