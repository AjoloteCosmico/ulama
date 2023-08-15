<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelota;
class PelotasController extends Controller
{
    public function index(){
        $Pelotas=Pelota::all();
        return view('pelotas.index',compact('Pelotas'));
    }
    public function create(){
        
        return view('pelotas.create');
    }
    public function store(Request $request){
        $Pelota= new Pelota();

        $Pelota->nombre=$request->nombre;
        $Pelota->institucion=$request->institucion;
        $Pelota->caracteristicas=$request->caracteristicas;
        $Pelota->save();
        return redirect()->route('pelotas.index');
    }
}
