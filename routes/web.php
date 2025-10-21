<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/',[HomeController::class,'index'])->name('index');
Route::middleware('auth')->group(function () {
    Route::get('secret', [HomeController::class, 'home'])->name('secret');
    Route::get('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
    Route::post('store',[TaskController::class,'store'])->name('task.store');
   
});
