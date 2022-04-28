<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublicController;

Route::get('/99k', function () {return view("public/content/99k");})->name('99k');
Route::get('/sixpack-3', function () {return view("public/content/sixpack-3");})->name('sixpack-3');

Route::prefix('daftar')->name('daftar.')->group(function () {
  // Route::get('', [PublicController::class, 'daftar'])->name('gym');
  Route::get('', [PublicController::class, 'daftar'])->name('index');
  Route::get('/send/{kode}', [PublicController::class, 'daftarSend'])->name('send');
  Route::get('/confirm/{kode}/success', [PublicController::class, 'daftarConfirmSuccess'])->name('confirmSuccess');
  // Route::get('/confirm', [PublicController::class, 'daftarConfirm'])->name('confirm');
  Route::get('/confirm/{kode}', [InvoiceController::class, 'edit'])->name('invoiceEdit');
  Route::post('/confirm', [InvoiceController::class, 'update'])->name('updateConfirm');
  Route::post('', [PublicController::class, 'daftarSave'])->name('store');

});