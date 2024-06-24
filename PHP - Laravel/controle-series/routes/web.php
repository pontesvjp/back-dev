<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Autenticator;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return redirect('/series');
})->middleware(Autenticator::class);

Route::resource('/series', SeriesController::class)->except(['show']);

Route::get('/series/{series}/season', [SeasonsController::class, 'index'])->name('seasons.index');
Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/register', [UsersController::class,'create'])->name('users.create');
Route::post('/register', [UsersController::class,'store'])->name('users.store');
