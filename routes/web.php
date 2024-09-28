<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;


Route::get('/',[FrontendController::class,'homePage'])->name('homePage');
Route::get('/Shop',[FrontendController::class, 'shopPage'])->name('shopPage');
Route::get('/About-us',[FrontendController::class,'aboutUsPage'])->name('aboutUsPage');
Route::get('/Services',[FrontendController::class,'servicePage'])->name('servicePage');
Route::get('/Blog',[FrontendController::class,'blogPage'])->name('blogPage');
Route::get('/Contact-us',[FrontendController::class,'contactUsPage'])->name('contactUsPage');
Route::get('/Add-to-cart',[FrontendController::class,'addToCartPage'])->name('addToCartPage');
Route::get('/Oder-completed',[FrontendController::class,'completedOderPage'])->name('completedOderPage');

//  page routes












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
