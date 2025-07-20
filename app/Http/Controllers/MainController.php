<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView()
    {
         $data=[
            'value'=>100,
            'cities'=>['New york','Los angeles','Chicago'],
            'names'=>['a','b','c'],
            'indice'=>1
         ];

         return View('home',$data);
    }

    public function submit(){
         echo' Formulario submetido ';
    }

    public function setSession(){
       
        session(['name'=>'jose']);

        return view('home');
       
    }

   
}
