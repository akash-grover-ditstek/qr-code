<?php

use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;

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
    return view('pages.welcome');
})->name('home');

Route::get('/generate',"Controller@generate")->name("generate");
// Route::get('/generate',function(){
//     return response(QRCode::text('QR Code Generator for Laravel!')->setSize(15)->png())->header('Content-Type','image/png');    
// })->name("generate");