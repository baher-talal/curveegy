<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//backend routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::prefix('dashboard')->group(function () {

    Route::get('/', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');

    Route::get('headervideo', [App\Http\Controllers\Dashboard\HomePageController::class, 'headervideo']);
    Route::post('headervideoStore', [App\Http\Controllers\Dashboard\HomePageController::class, 'headervideoStore']);
    
    Route::get('cards', [App\Http\Controllers\Dashboard\HomePageController::class, 'cards']);
    Route::post('cardsStore', [App\Http\Controllers\Dashboard\HomePageController::class, 'cardsStore']);
    Route::get('cardsEdit', [App\Http\Controllers\Dashboard\HomePageController::class, 'cardsEdit']);
    Route::post('cardsDelete', [App\Http\Controllers\Dashboard\HomePageController::class, 'cardsDelete']);
    
    Route::post('newsletterStore', [App\Http\Controllers\Dashboard\HomePageController::class, 'newsletterStore']);
    Route::post('landing', [App\Http\Controllers\Dashboard\HomePageController::class, 'landing']);
});


//front routes
Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index']);
Route::get('/landing', [App\Http\Controllers\Front\FrontController::class, 'landing'])->name('landing');
