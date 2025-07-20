@extends('layouts/main_layout')
@section('content')


{{-- Exibindo php puro ---}}

@php
  $valor=100;

  // essa variavel vai mostrar um componente usando uma classe do bootstrap
  // fazendo dessa forma mesmo com php puro eu consigo renderizar tables,buttons e etc 
  $valor1 = '<span class="text text-warning">'.$valor."<span>";
  
  $nome ="Ivan Rodrigues"; 


@endphp

 <h2>{{ $valor }}</h2>

 {{-- nesse caso estou mostando um php puro que traz um componete bootstrap  --}}
 <h2>{!! $valor1 !! }</h2>


 <h2> {{  $valor * 1000 }}</h2>

 //mostrando o reultado de uma função nativa do php puro no blade

 <h3> $nome tem <span class="text-info"> {{ strlen($nome)}} </span> carcteres </h3>
  
  
@endsection

  

