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

Route::redirect('/', config('app.locale'));

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::get('/', [App\Http\Controllers\FrontControllers\FrontController::class, 'index'])->name('main-page');

    Route::get('/contact-us', [App\Http\Controllers\FrontControllers\FrontController::class, 'contactUs'])->name('contact-us');

    Route::get('/{product}-{slug}', [App\Http\Controllers\FrontControllers\FrontController::class, 'singleProduct'])->name('single.product');

    Route::post('/message', [App\Http\Controllers\FrontControllers\FrontController::class, 'message'])->name('message');

    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-panel.php';
