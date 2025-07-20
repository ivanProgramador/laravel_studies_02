@extends('layouts/main_layout')
@section('content')

@session('name')

   <h2>O nome da sessão e: {{ session('name') }}</h2>    
@endsession

@endsection

  

