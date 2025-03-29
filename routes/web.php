<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist', [TugasController::class, 'index'])-> name('tugas.index');