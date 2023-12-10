<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterController;
use App\Http\Controllers\UserController;

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

Route::post('/user/login', [LoginController::class, 'login']);
Route::get('/user/all', [UserController::class, 'getUser']);
Route::get('/materi/all', [MaterController::class, 'allmateri']);
Route::middleware('auth:sanctum')->post('user/logout', [LoginController::class, 'logout']);
