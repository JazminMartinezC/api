<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class usuarioController extends Controller
{
    public function getUsuario(){
        return response()->json(usuario::all(),200);
    }

    public function getUsuarioId($id){
        $usuario=usuario::find($id);
        if(is_null($usuario)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        return response()->json($usuario::find($id),200);
    }

    public function insertUsuario(Request $request){
        $usuario=usuario::create($request->all());
        return response($usuario,200);
    }

    public function updateUsuario(Request $request, $id){
        $usuario=usuario::find($id);
        if(is_null($usuario)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        $usuario->update($request->all());
        return response($usuario,200);
    }

    public function deleteUsuario($id){
        $usuario=usuario::find($id);
        if(is_null($usuario)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        $usuario->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado']);
    }

}
