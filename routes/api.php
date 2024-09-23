<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ApplyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::post('/postregister', [AuthController::class, 'postregister']);

Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);


Route::post('/apply', [ApplyController::class, 'store']);
Route::get('/apply', [ApplyController::class, 'index']);
Route::get('/apply/{id}', [ApplyController::class, 'show']);
Route::put('/apply/{id}', [ApplyController::class, 'update']);
Route::delete('/apply/{id}', [ApplyController::class, 'destroy']);
