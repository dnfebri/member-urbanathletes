<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContentController::class, 'index']);

Route::get('/content', [PublicController::class, 'home']);

Route::prefix('daftar')->name('daftar.')->group(function () {
  Route::get('/gym', [PublicController::class, 'daftar'])->name('gym');
  Route::get('/send/{kode}', [PublicController::class, 'daftarSend'])->name('send');
  Route::post('', [PublicController::class, 'daftarSave'])->name('store');

});
// Route::get('/member', function () {
//   return view('public/member/join');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
