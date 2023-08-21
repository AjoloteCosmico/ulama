<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rotacion;
use App\Models\Pelota;
use App\Models\Users;
use DB;
use Illuminate\Support\Facades\Auth;
class RotacionesController extends Controller
{
    public function index(){
        $Rotaciones=DB::table('rotaciones')
        ->join('pelotas','pelotas.id','=','rotaciones.pelota_id')
        ->join('users','users.id','=','rotaciones.user_id')
        ->select('rotaciones.*','users.name','pelotas.nombre')
        ->get();
        ;
        dd($Rotaciones);
        return view('rotaciones.index',compact('Rotaciones'));
    }
    public function create(){
        $Pelotas=Pelota::all();
        return view('rotaciones.create',compact('Pelotas'));
    }
    public function store(Request $request){
        $Rotacion= new Rotacion();

        $Rotacion->pelota_id=$request->pelota_id;
        $Rotacion->user_id=Auth::user()->id;
        $Rotacion->observations=$request->observations;
        $Rotacion->date=$request->date;
        $Rotacion->save();
        return redirect()->route('rotaciones.index');
    }
}
