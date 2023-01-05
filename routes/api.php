<?php

use App\Http\Controllers\ImportArticlesController;
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

/*Route::middleware('api')->group(function () {
    Route::resource('articles', ImportArticlesController::class);
});*/

Route::get('articles', [ImportArticlesController::class, 'showForm']);
Route::prefix('article')->group(function () {
    Route::post('/import', [ImportArticlesController::class, 'import']);
});
