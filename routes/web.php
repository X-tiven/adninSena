<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingcenterController;
use App\Http\Controllers\ComputerController;
 

Route::get('/', function () {
    return view('welcome');
});

//Rutas Area
Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');

//Rutas Trainingcenter
Route::get('trainingcenters', [TrainingcenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenters/create', [TrainingcenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenters/store', [TrainingcenterController::class, 'store'])->name('trainingcenter.store');

//Rutas Computer
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');