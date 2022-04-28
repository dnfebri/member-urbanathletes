<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin;

Auth::routes([
  'register' => false,
]);

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/home', [Admin\InvoiceController::class, 'index'])->name('home');
  Route::prefix('admin')->name('admin')->group(function () {
  });
});