<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistrat;

class SistratController extends Controller
{
    //
    public function traertodos(){
        $todoLosCentros = Sistrat::all();
        return $todoLosCentros;
    }
    /**
     *
     */
    public function traerDatosCentroId($id){
        /*selecciona solo algunos campos*/
        $todoLosCentros = Sistrat::select('centro_id','centro_nombre','centro_region','centro_comuna')->find($id);
        return  response()->json($todoLosCentros);
    }
}
