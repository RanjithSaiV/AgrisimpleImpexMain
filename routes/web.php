<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/about-kyc', [PageController::class, 'aboutKyc']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/banana', [PageController::class, 'products']);
Route::get('/tender-coconut', [PageController::class, 'tenderCoconut']);
Route::get('/banana-specification', [PageController::class, 'bananaSpecification']);
Route::get('/price-list', [PageController::class, 'priceList']);
Route::get('/appointment', [PageController::class, 'appointment']);
Route::post('/contact-submit', [PageController::class, 'contactForm'])->name('contact-submit');
