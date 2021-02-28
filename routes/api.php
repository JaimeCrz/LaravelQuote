<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/quotes', [QuoteController::class, 'index']);
Route::prefix(('/quote')->group(function () {
  Route::post('/store', [QuoteController::class, 'store']);
  Route::put('/{id}', [QuoteController::class, 'update']);
  Route::delete('/{id}', [QuoteController::class, 'destroy']);
}));

// Delete/destroy method not gonna be use in this test =), Keeping it for future upgrades. 