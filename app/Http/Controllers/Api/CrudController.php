<?php

namespace App\Http\Controllers\Api;

use App\Models\Crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CrudController extends Controller
{
    public function read(Request $request){
        $user = new Crud();

        if($request->query("id")){
            $crud = $user->find($request->query("id"));
        }else{
            $crud = $user->all();
        }

       return response()->json($crud,200);
    }

    public function create(Request $request){

        $user = new Crud();

        $user->nombres = $request->input("nombres");
        $user->apellidos = $request->input("apellidos");
        $user->tipoidentificacion = $request->input("tipoidentificacion");
        $user->identificacion = $request->input("identificacion");
        $user->telefono = $request->input("telefono");
        $user->email = $request->input("email");
        $user->profesion = $request->input("profesion");
        $user->rol = $request->input("rol");

        $user->save();

        $message=["message" => "Registro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
    }

    public function update(Request $request){

        $idUser = $request->query("id");
        $user = new Crud();

        $userParticular = $user->find($idUser);

        $userParticular->nombres = $request->input("nombres");
        $userParticular->apellidos = $request->input("apellidos");
        $userParticular->tipoidentificacion = $request->input("tipoidentificacion");
        $userParticular->identificacion = $request->input("identificacion");
        $userParticular->telefono = $request->input("telefono");
        $userParticular->email = $request->input("email");
        $userParticular->profesion = $request->input("profesion");
        $userParticular->rol = $request->input("rol");

        $userParticular->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idUser" => $request->query("id"),
        ];

        return $message;
        
    }

    public function delete(Request $request){

        $idUser = $request->query("id");
        $user = new Crud();

        $userParticular = $user->find($idUser);

        $userParticular->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idUser" => $request->query("id"),
        ];

        return $message;
        
    }





}
