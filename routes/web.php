<?php

use App\Http\Controllers\PdfController;
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
//pagina de Vista
//Route::view('/','welcome')->name('welcome');


//Controllador

Route::get('/',[PdfController::class,'index'])->name('generatePdf');
Route::get('/descargarDePdf',[PdfController::class,'download'])->name('downloadPdf');
