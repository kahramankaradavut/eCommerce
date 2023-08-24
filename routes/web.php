<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\PageHomeController;

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

Route::group(['middleware' => 'sitesetting'], function() {
    Route::get('/', [PageHomeController::class, 'mainPage'])->name('mainPage');
    Route::get('/ürünler', [PagesController::class, 'products'])->name('products');
    Route::get('/erkek-giyim', [PagesController::class, 'products'])->name('erkekurunler');
    Route::get('/kadin-giyim', [PagesController::class, 'products'])->name('kadinurunler');
    Route::get('/cocuk-giyim', [PagesController::class, 'products'])->name('cocukurunler');
    Route::get('/indirimdekiler', [PagesController::class, 'sale'])->name('indirimdekiler');
    Route::get('/ürün-detay/{slug}', [PagesController::class, 'productsDetails'])->name('productsDetails');
    Route::get('/hakkında', [PagesController::class, 'about'])->name('about');
    Route::get('/iletisim', [PagesController::class, 'contact'])->name('contact');
    Route::get('/sepet', [PagesController::class, 'cart'])->name('cart');    
    Route::post('/iletisim-kaydet', [AjaxController::class, 'contactsave'])->name('contact.save');

});




