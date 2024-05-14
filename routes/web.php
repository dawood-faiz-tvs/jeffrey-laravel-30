<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\RedirectResponse;

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

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware('auth')->can('edit-job', 'job');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth')->can('edit-job', 'job');
Route::get('jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit-job', 'job');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
