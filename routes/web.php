<?php

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

Route::get('/zixmonkeys', function () {
    return view('zixmonkeys');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/presupuestos', function () {
    return view('presupuestos');
});

Route::get('/contacto', function () {
    return view('contacto');
});


