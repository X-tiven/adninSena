<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
 

Route::get('/', function () {
    return view('welcome');
});

Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');