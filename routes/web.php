<?php

use App\Http\Controllers\ExportDataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('home');
});

Route::post('/export', [ExportDataController::class, 'index'])->name('export');
