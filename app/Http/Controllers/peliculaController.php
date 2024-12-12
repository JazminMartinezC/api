<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculas;

class peliculaController extends Controller
{
    public function getPelicula(){
        return response()->json(peliculas::all(),200);
    }

    public function getPeliculaId($id){
        $pelicula=peliculas::find($id);
        if(is_null($pelicula)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        return response()->json($pelicula::find($id),200);
    }

    public function insertPelicula(Request $request){
        $pelicula=peliculas::create($request->all());
        return response($pelicula,200);
    }

    public function updatePelicula(Request $request, $id){
        $pelicula=peliculas::find($id);
        if(is_null($pelicula)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        $pelicula->update($request->all());
        return response($pelicula,200);
    }

    public function deletePelicula($id){
        $pelicula=peliculas::find($id);
        if(is_null($pelicula)){
            return response()->json(['Mensaje'=>'Resgistro no encontrado'],404);
        }
        $pelicula->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado']);
    }

    public function buscarPorNombre(Request $request){
        $nombre = $request->input('nombre');
        $peliculas = peliculas::where('nombre', 'LIKE', "%{$nombre}%")->get();

        return response()->json($peliculas);
    }

    public function peliculasPaginadas(Request $request){
        $page = $request->input('pagina', 1);
        $perPage = $request->input('tam', 6);


        $query = peliculas::query();
        $peliculas = $query->paginate($perPage, ['*'], 'page', $page);
    
        $response = [
            'data' => $peliculas->items(),
            'actual' => $peliculas->currentPage(),
            'tam' => $peliculas->perPage(),
            'total' => $peliculas->total(),
        ];
    
        return response()->json($response);
    }
}

/*
// Filtrar por nombre si se proporciona
        $nombre = $request->input('nombre', '');
    
        $query = Pelicula::query();
        
        // Filtrar las películas si se proporciona el nombre
        if ($nombre) {
            $query->where('nombre', 'LIKE', "%{$nombre}%");
        }

        
        $start = ($page - 1) * $perPage;
        $end = $start + $perPage;
        $peliculas = peliculas::skip($start)->take($perPage)->get();
        $total = peliculas::count();

        'data' => $peliculas->items(),
            'actual' => $peliculas->currentPage(),
            'tam' => $peliculas->perPage(),
            'total' => $peliculas->total(),
*/