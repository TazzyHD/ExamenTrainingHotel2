<?php

use App\Http\Controllers\ReserveringController;
use App\Http\Controllers\KamerController;
use App\Http\Controllers\MeldingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/reserveringen', ReserveringController::class);
Route::resource('/kamers', KamerController::class);
Route::resource('/meldingen', MeldingController::class);
