<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
require __DIR__ '/../vendor\werneckbh\qr-code\src\QR-Code\Util\AbstractGenerator.php:55';
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

Route::get('/', function () {
    return view('index');
});


Route::get('qr-code', function () 
{	
	$qr = QRCode::text('QR Code Generator for Laravel!')->svg();
	$file = 'public/resources/img/qr/' . $qr;
	setOutfile($file);
  	return $qr;    

  	//	$file = asset('resources/img/qr/qrimage.svg');
	
//  	QRCode::text('QR Code Generator for Laravel!')->setOutfile($file);    

});

Route::get('projects', [ProjectsController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
