<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Rol;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

//    FUNCION PARA MOSTRAR LA LIST

    public function index()
    {
        $user = User::all();
        return response()->json(['data' => $user], 200);
    }

    // FUNCION PARAR CREAR UN REGISTRO

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->api_token = User::apiToken();
        $user->rol_id = $request->rol_id;
        $user->save();
        return response()->json(['data' => $user], 201);

    }

    // FUNCION PARA CONSULTAR POR ID

    public function show(User $user)
    {
        $user->rol;
        return response()->json(['data' => $user], 200);
    }

    // FUNCION PARA MODIFICAR REGISTRO POR ID

    public function update(Request $request, User $user)
    {
     
        $user->name = $request->name;
        // SI EL REGISTRO TIENE CAMBIO EN EL EMAIL SE DEBERA GENERAR AUTOMATICAMENTE OTRO TOKEN PARA EL USUARIO

        if ($request->has('email') && $user->email != $request->email) {
            $user->apiToken = User::apiToken();
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json(['data' => $user], 200);

    }

    // FUNCION PARA ELIMINAR POR ID

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['data' => $user], 200);
    }
}
