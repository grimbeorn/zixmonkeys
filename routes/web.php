<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/kiebitz', function () {
    return view('kiebitz');
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

Route::get('/faqs', function () {
    return view('faqs');
});

Route::post('/contact2', 'contact2Controller@send');

Route::post('/presupuestos2', 'presupuestos2Controller@send');


