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
        $Pelota= new Pelota();

        $Pelota->nombre=$request->nombre;
        $Pelota->institucion=$request->institucion;
        $Pelota->caracteristicas=$request->caracteristicas;
        $Pelota->save();
        return redirect()->route('rotaciones.index');
    }
}
