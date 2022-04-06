<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/welcome_to_ua', function () { return view('crm.welcome_to_ua');});
Route::get('/success_buy_pt', function () { return view('crm.success_buy_pt');});

Route::get('/dev', [PublicController::class, 'home']);

Route::get('/', [ContentController::class, 'index'])->name('content');
Route::get('/99k', [ContentController::class, 'index99k'])->name('99k');


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

Route::get('/isiemail', function () { return view('email.isi_email_confirm');});
// Route::get('/member', function () {
//   return view('public/member/join');
// });
Auth::routes([
  'register' => false,
]);

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/home', [Admin\InvoiceController::class, 'index'])->name('home');
  Route::prefix('admin')->name('admin')->group(function () {
  });
});

// nonAktive
Route::get('/homenotaktive', [HomeController::class, 'index'])->name('homeNotAktive');
