<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class,'showView']);

