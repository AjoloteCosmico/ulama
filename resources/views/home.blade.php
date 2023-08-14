@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div style="padding:30px;">
    <h1 class="text-white-50">Bienvenid@!!  {{Auth::user()->name }} </h1>
    <div>
     
    </div>
@endsection
 @section('js')
 <script>
    $(document).ready(function() {
$('#tabla').dataTable();
} );
 </script>
 @stop