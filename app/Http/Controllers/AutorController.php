<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AutorController extends Controller
{
    //
    public function index()
    {
        $autores = Autor::all();
        return response()->json($autores);
    }

    public function store(Request $request)
    {
        if ($request->isJson()) {
            $data = $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
            ]);

            $autor = Autor::create($data);


            return response()->json($autor, 201);
        } else {
            return response()->json(['error' => 'No se recibio un JSON valido'], 400, []);
        }
    }

    public function show($id)
    {
        if ($autor = Autor::find($id)) {
            return response()->json($autor);
        } else {
            return response()->json(['Error' => 'No encontrado'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->isJson()) {
            if ($autor = Autor::find($id)) {

                $data = $request->validate([
                    'nombre' => 'required',
                    'apellido' => 'required',
                ]);

                $autor->nombre = $data['nombre'];
                $autor->apellido = $data['apellido'];
                $autor->save();

                return response()->json($autor, 200);
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
            $autor = Autor::findOrFail($id);
            $autor->delete();
            return response()->json($autor, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'No content'], 406);
        }
    }

    public function getAutorArticulo($id)
    {

    }
}
