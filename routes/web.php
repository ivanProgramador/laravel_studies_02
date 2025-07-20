<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class,'showView']);
Route::post('/submit', [MainController::class,'submit'])->name('submit');
Route::get('/clearSession',[MainController::class, 'clearSession']);
Route::get('/setSession',[MainController::class, 'setSession']);


