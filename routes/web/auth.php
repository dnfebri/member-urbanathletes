<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;
// use App\Http\Controllers\ProductController;

Auth::routes([
  'register' => false,
]);

Route::middleware(['auth', 'verified'])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return view('admin.dashboard'); });
    Route::get('/99k', [Admin\Invoice99kController::class, 'index'])->name('99k');
    // Route::prefix('product')->name('product.')->group(function () {
    // });
  });
});