<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Rp99kController;
use App\Http\Controllers\Sixpack3Controller;
use Illuminate\Support\Facades\Route;


Route::prefix('daftar')->name('daftar.')->group(function () {
  // Route::get('', [PublicController::class, 'daftar'])->name('gym');
  Route::get('', [PublicController::class, 'daftar'])->name('index');
  Route::get('/send/{kode}', [PublicController::class, 'daftarSend'])->name('send');
  Route::get('/confirm/{kode}/success', [PublicController::class, 'daftarConfirmSuccess'])->name('confirmSuccess');
  // Route::get('/confirm', [PublicController::class, 'daftarConfirm'])->name('confirm');
  Route::get('/confirm/{kode}', [InvoiceController::class, 'edit'])->name('invoiceEdit');
  Route::post('/confirm-update', [InvoiceController::class, 'update'])->name('updateConfirm');
  Route::post('', [PublicController::class, 'daftarSave'])->name('store');
});

Route::prefix('99k')->name('99k.')->group(function () {
  Route::get('', function () {return view("public/content/99k/index");})->name('index');
  Route::get('/daftar', [Rp99kController::class, 'daftar'])->name('daftar');
  Route::get('/generate', [Rp99kController::class, 'generate'])->name('generate');
  Route::get('/proses/{kode}', [Rp99kController::class, 'proses'])->name('proses');
  Route::get('/confirm/{kode}', [Rp99kController::class, 'edit'])->name('invoiceEdit');
  Route::get('/confirm/{kode}/send', [Rp99kController::class, 'confirmSend'])->name('confirmSend');
  Route::post('', [Rp99kController::class, 'daftarSave'])->name('save');
  Route::put('{kode}',[Rp99kController::class, 'update'])->name('update');
  Route::post('/generate',[Rp99kController::class, 'updateKode'])->name('updateKode');
});

Route::prefix('sixpack-3')->name('sixpack3.')->group(function () {
  Route::get('', function () {return view("public/content/sixpack3/sixpack-3");});
  Route::get('daftar',[Sixpack3Controller::class, 'daftar'])->name('daftar');
  Route::get('/send/{kode}', [Sixpack3Controller::class, 'send'])->name('send');
  Route::get('/confirm/{kode}', [Sixpack3Controller::class, 'edit'])->name('edit');
  Route::get('/confirm/{kode}/send', [Sixpack3Controller::class, 'confirmSend'])->name('confirmSend');
  Route::post('',[Sixpack3Controller::class, 'store'])->name('store');
  Route::put('{kode}',[Sixpack3Controller::class, 'update'])->name('update');
});