<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContentController::class, 'index'])->name('content');

Route::get('/content', [PublicController::class, 'home']);

Route::prefix('daftar')->name('daftar.')->group(function () {
  // Route::get('', [PublicController::class, 'daftar'])->name('gym');
  Route::get('/gym', [PublicController::class, 'daftar'])->name('gym');
  Route::get('/send/{kode}', [PublicController::class, 'daftarSend'])->name('send');
  Route::get('/confirm/success', [PublicController::class, 'daftarConfirmSuccess'])->name('confirmSuccess');
  // Route::get('/confirm', [PublicController::class, 'daftarConfirm'])->name('confirm');
  Route::get('/confirm/{kode}', [PublicController::class, 'daftarConfirm'])->name('confirm');
  Route::post('/confirm', [PublicController::class, 'storeDaftarConfirm'])->name('storeConfirm');
  Route::post('', [PublicController::class, 'daftarSave'])->name('store');

});

Route::get('/isiemail', function () { return view('email.isi_email');});
// Route::get('/member', function () {
//   return view('public/member/join');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
