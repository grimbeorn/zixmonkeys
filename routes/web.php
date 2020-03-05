<?php

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

Route::post('/contact2', 'contact2Controller@send');

Route::post('/presupuestos2', 'presupuestos2Controller@send');


