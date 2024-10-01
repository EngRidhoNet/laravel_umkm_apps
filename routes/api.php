<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ChatController;
// use App\Http\Controllers\LikeController;
// use App\Http\Controllers\UmkmController;
// use App\Http\Controllers\ApplyController;
// use App\Http\Controllers\PesanController;
// use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\MahasiswaController;
// use App\Http\Controllers\PekerjaanController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout']);
// Route::post('/postlogin', [AuthController::class, 'postlogin']);
// Route::post('/postregister', [AuthController::class, 'postregister']);

// Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
// Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
// Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

// Route::post('/apply', [ApplyController::class, 'store']);
// Route::get('/apply', [ApplyController::class, 'index']);
// Route::get('/apply/{id}', [ApplyController::class, 'show']);
// Route::put('/apply/{id}', [ApplyController::class, 'update']);
// Route::delete('/apply/{id}', [ApplyController::class, 'destroy']);

// Route::post('/artikel', [ArtikelController::class, 'store']);
// Route::get('/artikel', [ArtikelController::class, 'index']);
// Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
// Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
// Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

// Route::post('/chat', [ChatController::class, 'store']);
// Route::get('/chat', [ChatController::class, 'index']);
// Route::get('/chat/{id}', [ChatController::class, 'show']);
// Route::put('/chat/{id}', [ChatController::class, 'update']);
// Route::delete('/chat/{id}', [ChatController::class, 'destroy']);

// Route::post('comment', [CommentController::class, 'store']);
// Route::get('comment', [CommentController::class, 'index']);
// Route::get('comment/{id}', [CommentController::class, 'show']);
// Route::put('comment/{id}', [CommentController::class, 'update']);
// Route::delete('comment/{id}', [CommentController::class, 'destroy']);

// Route::post('like', [LikeController::class, 'store']);
// Route::get('like', [LikeController::class, 'index']);
// Route::get('like/{id}', [LikeController::class, 'show']);
// Route::put('like/{id}', [LikeController::class, 'update']);
// Route::delete('like/{id}', [LikeController::class, 'destroy']);

// Route::post('pekerjaan', [PekerjaanController::class, 'store']);
// Route::get('pekerjaan', [PekerjaanController::class, 'index']);
// Route::get('pekerjaan/{id}', [PekerjaanController::class, 'show']);
// Route::put('pekerjaan/{id}', [PekerjaanController::class, 'update']);
// Route::delete('pekerjaan/{id}', [PekerjaanController::class, 'destroy']);

// Route::post('pesan', [PesanController::class, 'store']);
// Route::get('pesan', [PesanController::class, 'index']);
// Route::get('pesan/{id}', [PesanController::class, 'show']);
// Route::put('pesan/{id}', [PesanController::class, 'update']);
// Route::delete('pesan/{id}', [PesanController::class, 'destroy']);

// Route::post('umkm', [UmkmController::class, 'store']);
// Route::get('umkm', [UmkmController::class, 'index']);
// Route::get('umkm/{id}', [UmkmController::class, 'show']);
// Route::put('umkm/{id}', [UmkmController::class, 'update']);
// Route::delete('umkm/{id}', [UmkmController::class, 'destroy']);




