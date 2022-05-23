<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {

    Route::prefix('membership')->name('membership.')->group(function () {
      Route::get('', [ProductController::class, 'index'])->name('index');
      Route::get('{slug}', [ProductController::class, 'show'])->name('show');
    });

  });
});
