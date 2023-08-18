<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rotacion;
use App\Models\Pelota;
use App\Models\Users;
class RotacionesController extends Controller
{
    public function index(){
        $Rotaciones=Rotacion::all();
        return view('rotaciones.index',compact('Rotaciones'));
    }
    public function create(){
        
        return view('rotaciones.create');
    }
    public function store(Request $request){
        $Rotacion= new Rotacion();

        $Rotacion->nombre=$request->nombre;
        $Rotacion->institucion=$request->institucion;
        $Rotacion->caracteristicas=$request->caracteristicas;
        $Rotacion->save();
        return redirect()->route('rotaciones.index');
    }
}
