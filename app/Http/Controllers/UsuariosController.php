<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosSidoc;

class UsuariosController extends Controller
{
    
     /* 
     * */
     public function traerDatosUsuario($email){
        /*selecciona solo algunos campos*///$query->where('slug', $slug);
      //  $traerDatosUsuario = usuariosSidoc::select('id','rut','email')->whereRaw("UPPER('email') LIKE '%". strtoupper($email)."%'")->get();
    //$traerDatosUsuario = usuariosSidoc::select('id','rut','email')->where('email', 'ilike', '"%' . $email . '%"')->first();
        $traerDatosUsuario = usuariosSidoc::select('id','rut','email', 'nombre', 'apellido')->whereRaw('email like "%'.$email.'%" ', 1)->get();
        return  response()->json($traerDatosUsuario);
    }
}
