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

Route::get('/', function () {
    return view('welcome');
});

Route::get('productor', function(){
    return view('productor');
});
Route::get('icomers',function(){
    return view('icomers');
})->name('icomers');
Route::get('usuarios', function(){
    return view('usuarios');
});

Route::get('venta', function(){
    return view('venta');
});