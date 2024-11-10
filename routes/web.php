<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs');


// routes/web.php

Route::post('/send-message', [PageController::class, 'sendMessage'])->name('sendMessage');
