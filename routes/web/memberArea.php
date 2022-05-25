<?php

use App\Http\Controllers\Member\MemberAreaController;
use Illuminate\Support\Facades\Route;

Route::prefix('member')->name('member.')->group(function () {
  Route::get('', [MemberAreaController::class, 'loginForm'])->name('loginForm');
  Route::post('', [MemberAreaController::class, 'login'])->name('login');
  // Route::get('{slug}', [ProductController::class, 'show'])->name('show');
});
