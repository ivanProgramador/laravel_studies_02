<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView()
    {

         return View('home');
    }

    public function showPage()
    {
        //acessando uma view dentro de uma subpasta 
         return View('admin.newPage3');
    }

    public function dataPage(){

         $data = [
            "nome"=>"josé",
            "telefone"=>"777777-888888"
         ];
         
         return view('dataPage', $data);
    }
}
