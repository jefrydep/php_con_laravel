<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\indexControler;





Route::get('/', IndexController::class);

Route::get('/', function () {
    return'bienvenido mi primera aplicaion con larabel';
});

Route:: get('productos',ProductoController::class,'index');