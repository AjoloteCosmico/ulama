@extends('layouts.app')

@section('content')

<div class="container-fluid"  background="{{asset('img/Fondo4.jpg')}}">
<div class="row rounded-b-none rounded-t-lg shadow-xl bg-white">
            <h5 class="card-title p-2">
                <i class="fas fa-plus-circle"></i>&nbsp; REGISTRAR PELOTA:
            </h5>
        </div>
        <form action="{{ route('pelotas.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="row rounded-b-lg rounded-t-none mb-4 shadow-xl bg-gray-300">
            <div class="row p-4">
                <div class="col-sm-12 col-xs-12 shadow rounded-xl p4">
                    <div class="card">
                        <div class="card-body">
                            
                            
                                  
                                    <div class="form-group">
                                      <h1 style="color:#1b2a1b">Nombre</h1>
                                        
                                        <input type="text"  name="nombre" class="form-control  w-full text-xl" />
                                        
                                    </div>
                                    <h1 style="color: #1b2a1b;">Institucion</h1>
                                    <select class="form-capture  w-full text-xl uppercase" name="institucion" style="color:#1b2a1b;" >
                                        <option  > UNAM </option> 
                                        <option  > SIERRA</option>  
                                    </select>
                                    <div class="form-group">
                                      <h1 style="color:#1b2a1b">Caracteristicas</h1>
                                        
                                        <input type="text"  name="caracteristicas" class="form-control  w-full text-xl" />
                                        
                                    </div>
                             

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-right p-2 gap-2">
                  <a href="{{ route('pelotas.index')}}" class="btn btn-black mb-2" style="background-color:#a05a5a;">
                    <i class="fas fa-times fa-2x"></i>&nbsp;&nbsp; Cancelar
                </a>  
                <button type="submit" class="btn btn-green mb-2" style="background-color:#5aa05a;">
                    <i class="fas fa-save fa-2x"></i>&nbsp; &nbsp; Guardar
                </button>
            </div>
        </div>
    
    
</div>
@stop

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

@endpush