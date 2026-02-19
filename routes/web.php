<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicServiceUnitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/unit-pelayanan-publik', [PublicServiceUnitController::class, 'index'])->name('public-service-unit.index');
