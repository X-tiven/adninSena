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
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');

//Rutas Trainingcenter
Route::get('trainingcenters', [TrainingcenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenters/create', [TrainingcenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenters/store', [TrainingcenterController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenter/{trainingcenter}', [TrainingcenterController::class, 'show'])->name('trainingcenter.show');
Route::delete('trainingcenter/{trainingcenter}',[TrainingcenterController::class,'destroy'])->name('trainingcenter.destroy');
Route::put('trainingcenter/{trainingcenter}',[TrainingcenterController::class,'update'])->name('trainingcenter.update');
Route::get('trainingcenter/{trainingcenter}/editar',[TrainingcenterController::class,'edit'])->name('trainingcenter.edit');


//Rutas Computer
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');