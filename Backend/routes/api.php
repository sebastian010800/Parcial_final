<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controllers\ControladorController;

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('Asignatura','App\Http\Controllers\ControladorController');