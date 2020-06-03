<?php

namespace App\Http\Controllers\Rol;

use App\Http\Controllers\Controller;
use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    // FUNCION PARA MOSTRAR LA LIST

    public function index()
    {
        $rol = Rol::all();
        return response()->json(['data' => $rol]);
    }

    // FUNCION PARA CREAR UN REGISTRO

    public function store(Request $request)
    {
        $rol = new Rol($request->all());
        $rol->save();
        return response()->json(['data' => $rol], 201);

    }

    // FUNCION PARA MOSTRAR UN REGISTRO POR ID

    public function show(Rol $role)
    {
        return response()->json(['data' => $role], 200);
    }

    // FUNCION PARA MODIFICAR UN REGISTRO POR ID

    public function update(Request $request, Rol $role)
    {
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        return response()->json(['data' => $role], 200);
    }

    // FUNCION PARA ELIMINAR UN REGISTRO POR ID

    public function destroy(Rol $role)
    {
        $role->delete();
        return response()->json(['data' => $role], 200);
    }
}
