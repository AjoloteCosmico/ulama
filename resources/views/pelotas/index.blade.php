@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo4.jpg')}}">
<br> <br> <br>
<div class="col-6 col-sm-12 table-responsive">
  <a href="{{ route('pelotas.create')}}">
    <button class="btn btn-primary" style="padding:10px;"> 
    <i class="fa-solid fa-plus-circle"></i>&nbsp; Nueva
               
    </button>
                </a>
               
                <table class="table table-striped text-xl" >
      <thead>
        <tr>
          <th>Pelota</th>
          <th>Institucion</th>
          <th>Caracteristicas</th>
          <th>Portador actual</th>
        </tr>

      </thead>
      <tbody>
        @foreach($Pelotas as $p)
        <tr>
          <td>{{$p->nombre}}</td>
          <td>{{$p->institucion}}</td>
          <td>{{$p->caracteristicas}}</td>
          <td></td>
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