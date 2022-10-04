<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\indexControler;





Route::get('/', [indexController::class, ]);

Route::get('/', function () {
    return'bienvenido mi primera aplicaion con larabel';
});

Route:: get('productos', function(){
    return'Bienvenidio a la seccin de los productos';
});