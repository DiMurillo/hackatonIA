<?php

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

Route::get('/certificado', function () {
    return view('VerifCertf');
});
Route::get('/carneta', function () {
    return view('carnetAnverso');
});
Route::get('/carnetr', function () {
    return view('carnetReverso');
});
Route::get('/', function () {
    return view('chat');
});
Route::get('/fina', function () {
    return view('finAgente');
});
Route::get('/fotou', function () {
    return view('fotoUser');
});
Route::get('/firma', function () {
    return view('huellaFirma');
});