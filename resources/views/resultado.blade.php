@extends('layouts.app')

@section('content')
<div class="container-fluid"  background="{{asset('img/Fondo2.jpg')}}">
    <div class="padding div" style="padding:30px;">
    <h1 class="text-white-50">Hola  {{Auth::user()->name }} {{Auth::user()->emojis }}</h1>
        <h1 class="text-white-50"> ¿Deseas buscar un numero de cuenta?</h1>
    </div>
    <center >
        @if($encuestas19->count()>0)
        <h1>
            ENCUESTA 2019
        </h1>
        <div class="col-6 col-sm-12 table-responsive">
                <table class="table  text-xl">
        <thead>
            <tr>
            <th>Egresado</th>
            <th>aplicador</th>
            <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas19 as $e)
            <tr style="color:#b0a46f" >
                <td>{{  $e->nombre}}  {{  $e->materno }}  {{  $e->paterno}}  </td>
                <td> @if($e->aplica ){{$e->aplica}} @else INTERNET @endif </td>
                <td>@if($e->ngr11f) Completa @else Incompleta @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endif
   </center>
    </div>
@endsection
