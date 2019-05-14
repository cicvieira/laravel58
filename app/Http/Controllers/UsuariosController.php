<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuariosRequest as Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $data = Usuario::all();
        return response()->json(['success' => true,'data' => $data], 200);
    }

    public function store(Request $request){
        $data = Usuario::create($request->all());
        return response()->json(['success' => true,'data' => $data->id], 201);
    }

    public function update(Request $request, Usuario $usuario){
        $data = $usuario->update($request->all());
        return response()->json(['success' => true,'data' => $data], 200);
    }

    public function show(Usuario $usuario){
        return response()->json(['success' => true,'data' => $usuario], 200);
    }

    public function destroy(Usuario $usuario){
        $data = $usuario->delete();
        return response()->json(['success' => true], 200);
    }

}
