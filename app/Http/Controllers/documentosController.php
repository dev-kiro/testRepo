<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentosSidoc;
use Illuminate\Support\Facades\DB;

class documentosController extends Controller
{

    /**
     * trae el codigo del documento de un ID
     */
    public function traerDatosId($id){
        /*selecciona solo algunos campos*/
        $traerDocumentoPorId = documentosSidoc::select('id','codigo_documento','id_miembro')->find($id);
        return  response()->json($traerDocumentoPorId);
    }

    public function traerDocumentoPorS($sdoc,$ano){
//         $programs=DB::connection('mysql2')->table('documento')->where('id', '1200')->get();
//   //      $users = DB::table('estado_documento')->get();
//         var_dump($programs);

        $traerDocPorS = documentosSidoc::select('id','codigo_documento','fecha_dcto', 'folio_externo','folio_interno','materia')->whereRaw('codigo_documento = "'.$sdoc.'/'.$ano.'" ', 1)->get();
        return  response()->json($traerDocPorS);
    }
}
