<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView()
    {
        
         return View('home',['valor'=>100]);
    }

   
}
