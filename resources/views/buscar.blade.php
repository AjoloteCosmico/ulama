@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> ¿Deseas buscar un numero de cuenta?</h1>
    </div>
    <center >
    <br><br>
        <form action="{{ route('resultado')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Numero de cuenta</label>
    <input  style="width:50%" type="number" class="form-control" name="nc" aria-describedby="emailHelp" placeholder="Ingresa el numero de cuenta">
   </div>
  
  <br>
  <button type="submit" style="color:rgb({{Auth::user()->color}})" class="btn btn-primary btn-lg">  <i class="fas fa-paper-plane"></i> Buscar</button>
 
  </form>
   </center>
    </div>
@endsection
