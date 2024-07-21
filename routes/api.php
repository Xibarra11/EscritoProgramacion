<?php

use App\Http\Controllers\api\personascontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/personas', function(){
    return 'Este es el listado de las personas registradas';
});

Route::get('/personas/{id}', function(){
    return 'Listado de personas por ID';
});

Route::post('/personas', [personascontroller::class,'store']);


Route::get('/personas/{id}', function(){
    return 'Actualizando informacion de la persona';
});

Route::get('/personas/{id}', function(){
    return 'eliminando persona';
});


