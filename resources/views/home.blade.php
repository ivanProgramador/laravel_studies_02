
@extends('layouts/main_layout')
@section('content')
  <p class="display-1 text-center">Home</p>


  {{--
       Dentro do blade a variável nome que está vindo do metodo pode ser
       mostrada em php puro ou pela diretiva blade 
      
       <p>{{ $nome }}</p>
  --}}

  {{-- 
     O blade suporta tambem a exibição condicional de componentes 
     atraves das diretivas de decisão 
  --}}

 {{-- IF simples  --}}
  @if($valor == 100)
    <p>O valor é igual a 100 </p>
  @endif

  {{-- IF ELSE --}}

  @if($valor != 100)
    <h2>Primeira parte do codigo</h2>
  @else 
    <h2>Segunda parte do codigo</h2>
  @endif

  {{-- IF ELSE ELSE IF smeelhante a uma liguagem estrurada ele suporta 
       fluxos de decisão mais complexos  --}}

  @if($valor < 10)
    <p> Primeiro </p>
  @elseif()
    <p> Segundo </p>
  @elseif()
    <p> Terceiro </p>
  @elseif()
    <p>Quarto</p>
  @endif


  
     






  


  <h2></h2>
@endsection