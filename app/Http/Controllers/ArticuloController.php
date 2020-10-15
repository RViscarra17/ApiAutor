<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Articulo;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json($articulos);
    }

    public function store(Request $request)
    {
        if ($request->isJson()) {

            $data = $request->validate([
                'autor_id' => 'required',
                'titulo' => 'required',
                'cuerpo' => 'required',
            ]);

            try {
                $autor = Autor::findOrFail($data['autor_id']);

                $articulo = Articulo::create($data);

                return response()->json($articulo, 201);
            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'Autor no encontrado'], 404);
            }
        } else {
            return response()->json(['error' => 'No se recibio un JSON valido'], 400, []);
        }
    }

    public function show($id)
    {
        if ($articulo = Articulo::find($id)) {
            return response()->json($articulo);
        } else {
            return response()->json(['Error' => 'No encontrado'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->isJson()) {
            if ($articulo = Articulo::find($id)) {

                $data = $request->validate([
                    'titulo' => 'required',
                    'cuerpo' => 'required',
                ]);

                $articulo->titulo = $data['titulo'];
                $articulo->cuerpo = $data['cuerpo'];
                $articulo->save();

                return response()->json($articulo, 200);
            } else {
                return response()->json(['Error' => 'No encontrado'], 404);
            }
        } else {
            return response()->json(['error' => 'No se recibio un JSON valido'], 400, []);
        }
    }

    public function destroy($id)
    {
        try {
            $articulo = Articulo::findOrFail($id);
            $articulo->delete();
            return response()->json($articulo, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'No encontrado'], 404);
        }
    }
}
