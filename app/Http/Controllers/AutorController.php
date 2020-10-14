<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

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
        if($request->isJson()){
            $data = $request->json()->all();
            dd($data);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401, []);
        }
    }


}
