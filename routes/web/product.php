<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('product')->name('product.')->group(function () {
  Route::get('', [ProductController::class, 'index'])->name('index');
  Route::get('{slug}', [ProductController::class, 'show'])->name('show');
});
