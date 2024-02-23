<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::view('/signin', 'auth.signin')->name('login');
    Route::view('/signup', 'auth.signup');
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::post('/signup', [AuthController::class, 'signup']);
});

Route::middleware('auth')->group(function(){
    Route::controller(AlbumController::class)->group(function(){
        Route::get('/album', 'index');
        Route::get('/newAlbum', 'create');
        Route::post('/addAlbum', 'store');
        Route::get('/detailAlbum/{id}', 'show');
        Route::get('/{id}/editAlbum', 'edit');
        Route::put('/{id}/editAlbum', 'update');
        Route::delete( '/{id}/deleteAlbum', 'destroy' );
    });
    Route::controller(FotoController::class)->group(function(){
        Route::get('/', 'index');
        Route::get('/newFoto', 'create');
        Route::post('/addFoto', 'store');
        Route::get('/detailFoto/{id}', 'show');
        Route::get('/toAlbum/{id}', 'edit');
        Route::put('/toAlbum/{id}', 'update');
        Route::delete('/{id}/deleteFoto', 'destroy');
    });
    Route::get('/signout', [AuthController::class, 'signout']);
    Route::post('/signout', [AuthController::class, 'signout']);
});
