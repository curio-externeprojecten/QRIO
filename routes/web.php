<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\InstructionsController;
use App\Http\Controllers\InstructionImagesController;
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


Route::get('qr-code', function () 
{	
  	$file = asset('resources/img/qr/qrimage.svg');
	
	$qr = QRCode::text('QR Code Generator for Laravel!')->svg(); 
	save($qr, $file);   

});


Route::get('instructions', [InstructionsController::class, 'index'])->name('instructions');

Route::get('instructions/image/create/{id}', [InstructionImagesController::class, 'create'])->name('instructions.images.create');
Route::post('instructions/image/create/{id}', [InstructionImagesController::class, 'store'])->name('instructions.images.store');

Route::get('instructions/create', [InstructionsController::class, 'create'])->name('instructions.create');
Route::post('instructions/create', [InstructionsController::class, 'store'])->name('instructions.store');

Route::get('instructions/{id}', [InstructionsController::class, 'show'])->name('instructions.show');

Route::get('instructions/edit/{id}', [InstructionsController::class, 'edit'])->name('instructions.edit');
Route::put('instructions/edit/{id}', [InstructionsController::class, 'update'])->name('instructions.update');

Route::get('instructions/delete/{id}', [InstructionsController::class, 'delete'])->name('instructions.delete');


// Route::get('login', [UserController::class, 'login']);
// Route::get('register', [UserController::class, 'register']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
