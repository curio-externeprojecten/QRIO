<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [MainController::class, 'index']);
Route::get('/qr_test', [MainController::class, 'qr_test']);

Route::get('instructions', [InstructionsController::class, 'index']);
Route::get('instructions/{id}', [InstructionsController::class, 'show'])->name('instructions.show');

// Route::get('login', [UserController::class, 'login']);
// Route::get('register', [UserController::class, 'register']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
