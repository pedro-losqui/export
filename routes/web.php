<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('reportCompany');
});

Route::get('/reportElis',       [PagesController::class, 'reportElis'])->name('reportElis');
Route::get('/reportCompany',    [PagesController::class, 'reportCompany'])->name('reportCompany');
