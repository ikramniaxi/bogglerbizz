<?php

use App\Http\Controllers\Api\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth routes
Route::post('signup', [AuthController::class, 'register']);
Route::post('sigin', [AuthController::class, 'login']);
Route::post('/signinwithgoogle', [AuthController::class, 'signinwithgoogle']);

// forgot password
Route::post('/sendcode', [AuthController::class, 'sendcode']);
Route::post('/verifyPassword', [AuthController::class, 'verifyPassword']);
Route::post('/resetPassword', [AuthController::class, 'resetPassword']);


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', [AuthController::class, 'getProfile']);
    Route::post('/updateProfile', [AuthController::class, 'updateProfile']);

    Route::post('/message', [MessageController::class, 'message']);
    Route::post('/message/{type}', [MessageController::class, 'getMessage']);
    Route::post('/logout', [AuthController::class, 'logout']);


});
