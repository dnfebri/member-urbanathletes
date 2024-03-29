<?php

use App\Http\Controllers\Api\BackInShapeController;
use App\Http\Controllers\Api\Rp288ControllerApi;
use App\Http\Controllers\Api\Rp99kControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v2')->group(function() {
    Route::get('/back-in-shapes', [BackInShapeController::class, 'getAll']);
    Route::get('/back-in-shapes/pay-proses', [BackInShapeController::class, 'payProses']);
});

Route::prefix('rp99k')->group(function() {
    route::get('/', [Rp99kControllerApi::class, 'getAll']);
});

Route::prefix('288')->group(function() {
    route::get('/', [Rp288ControllerApi::class, 'getAll']);
});
