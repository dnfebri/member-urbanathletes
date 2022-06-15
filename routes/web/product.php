<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('order')->name('order.')->group(function(){
  Route::post('', [OrderController::class, 'save'])->name('save'); // <=== ini masih dipakai
  Route::get('/{id}/status', [OrderController::class, 'status'])->name('status');
  Route::get('/status/{id}', [OrderController::class, 'searchDetail']);
  Route::get('/status', [OrderController::class, 'search'])->name('search');
});

Route::middleware(['auth', 'verified'])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {

    Route::prefix('membership')->name('membership.')->group(function () {
      Route::get('', [ProductController::class, 'index'])->name('index');
      Route::get('{slug}', [ProductController::class, 'show'])->name('show');
    });

  });
});
