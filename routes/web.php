<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class,'showView']);
Route::get('/subview', [MainController::class,'showPage']);
Route::get('/dataPage', [MainController::class,'dataPage']);
