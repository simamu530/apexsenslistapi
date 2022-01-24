<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApexprolistsController;
use App\Http\Controllers\SavesettingController;

Route::apiResource('/v1/apexprolist', ApexprolistsController::class);
Route::apiResource('/v1/savesetting', SavesettingController::class);

//apiHelloテスト
Route::get('/hello', function() {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});

Route::get('/v1/savesetting', function () {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});
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

// Route::get('apexprolist', 'ApexprolistsController@index');