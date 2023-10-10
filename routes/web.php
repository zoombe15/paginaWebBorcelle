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

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/resources/views/login', function () {
    return view('login');
});
Route::get('/resources/views/dashboard', function () {
    return view('dashboard');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sugerencias', function () {
    return view('sugerencias');
});

Route::get('/reclamaciones', function () {
    return view('reclamaciones');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

