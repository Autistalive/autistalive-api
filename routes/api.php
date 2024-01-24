<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->group(function (): void {
    Route::post('login', LoginController::class)->name('auth.login');
    Route::post('register', RegisterController::class)->name('auth.register');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
