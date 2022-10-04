<?php

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return'bienvenido mi primera aplicaion con larabel';
});

Route:: get('productos', function(){
    return'Bienvenidio a la seccin de los productos';
});

 