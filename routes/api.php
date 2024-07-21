<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/personas', function(){
    return 'Este es el listado de las personas registradas';
});

Route::get('/personas/{id}', function(){
    return 'Listado de personas por ID';
});



