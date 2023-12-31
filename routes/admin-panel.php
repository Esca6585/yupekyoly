<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::prefix('admin')->group(function (){
        Route::get('/dashboard', [App\Http\Controllers\AdminControllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');

        Route::resources([
            '/product' => App\Http\Controllers\AdminControllers\Product\ProductController::class,
            '/message' => App\Http\Controllers\AdminControllers\Message\MessageController::class,
        ]);
    });

    
    
});
