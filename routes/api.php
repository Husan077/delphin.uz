<?php

use App\Http\Controllers\Site\ClickController;
use App\Http\Middleware\VerifyCsrfToken;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('clickSignString')->group(function () {
        Route::post('/click-prepare', [ClickController::class, 'prepare'])->withoutMiddleware([VerifyCsrfToken::class]);
        Route::post('/click-complete', [ClickController::class, 'complete'])->withoutMiddleware([VerifyCsrfToken::class]);
});

