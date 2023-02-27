<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;






Auth::routes();


    Route::middleware('auth')->group(function(){
    Route::get('/', function () { return view('/home');});
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/machines', [App\Http\Controllers\MachineController::class, 'index'])->name('machines.index');
    Route::get('/machines/create', [App\Http\Controllers\MachineController::class, 'create'])->name('machines.create');
    Route::post('/machines', [App\Http\Controllers\MachineController::class, 'store'])->name('machines.store');
    Route::delete('/machines/{machine}/destroy', [App\Http\Controllers\MachineController::class, 'destroy'])->name('machines.destroy');

    Route::get('/cases', [App\Http\Controllers\CaseController::class, 'index'])->name('cases.index');
    Route::get('/cases/create', [App\Http\Controllers\CaseController::class, 'create'])->name('cases.create');
    Route::post('/cases', [App\Http\Controllers\CaseController::class, 'store'])->name('cases.store');
    Route::delete('/cases{case}/destroy', [App\Http\Controllers\CaseController::class, 'destroy'])->name('cases.destroy');
    Route::get('/cases/{case}/view', [App\Http\Controllers\CaseController::class, 'view'])->name('cases.view');

    Route::get('/annual-result', [App\Http\Controllers\AnualResultController::class, 'index'])->name('annual-result.index');

    Route::get('/parts', [App\Http\Controllers\PartsController::class, 'index'])->name('parts.index');
    Route::post('/parts', [App\Http\Controllers\PartsController::class, 'store'])->name('parts.store');
    Route::delete('/parts/{part}/destroy', [App\Http\Controllers\PartsController::class, 'destroy'])->name('parts.destroy');

    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');




        });



