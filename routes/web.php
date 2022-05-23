<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'index'])->name('content');
include __DIR__.'/web/auth.php';
include __DIR__.'/web/public.php';
include __DIR__.'/web/promo.php';
include __DIR__.'/web/crm.php';
include __DIR__.'/web/product.php';

// Untuk Testing View
Route::get('/isiemail', function () { return view('email.isi_email_confirm');});
Route::get('/ini', function () { return view('public/content/index');});
// Route::get('/member', function () {
//   return view('public/member/join');
// });
// nonAktive
Route::get('/homenotaktive', [HomeController::class, 'index'])->name('homeNotAktive');
