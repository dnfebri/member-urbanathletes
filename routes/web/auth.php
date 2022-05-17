<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;

Auth::routes([
  'register' => false,
]);

Route::middleware(['auth', 'verified'])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [Admin\InvoiceController::class, 'index'])->name('home');
    Route::prefix('product')->name('product.')->group(function () {
      Route::get('', [ProductController::class, 'index'])->name('index');
      Route::get('{slug}', [ProductController::class, 'show'])->name('show');
    });
  });
});