@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo4.jpg')}}">
<br> <br> <br>
<div class="col-6 col-sm-12 table-responsive">
  <a href="{{ route('rotaciones.create')}}">
    <button class="btn btn-primary" style="padding:10px;"> 
    <i class="fa-solid fa-plus-circle"></i>&nbsp; Nueva
               
    </button>
                </a>
               
                <table class="table table-striped text-xl" >
      <thead>
        <tr>
          <th>Pelota</th>
          <th>Jugador que entrega</th>
          <th>Jugador que recibe</th>
          <th>Fecha </th>
        </tr>

      </thead>
      <tbody>
        @foreach($Rotaciones as $r)
        <tr>
         <td> {{$r->nombre}}</td>
         <td></td>
          <td> {{$r->name}}</td>
        
          <td> {{$r->date}}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
    
    
</div>
@stop

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

@endpush