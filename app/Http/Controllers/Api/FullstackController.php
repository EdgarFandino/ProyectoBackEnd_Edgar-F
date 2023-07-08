<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fullstack;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FullstackController extends Controller
{
    public function read(Request $request){
        $data = new Fullstack();

        if($request->query("id")){
            $fullstack = $data->find($request->query("id"));
        }else{
            $fullstack = $data->all();
        }

       return response()->json($fullstack,200);
    }

    public function create(Request $request){

        $data = new Fullstack();

        $data->nombre = $request->input("nombre");
        $data->identificacion = $request->input("identificacion");
        $data->correo = $request->input("correo");
        $data->telefono = $request->input("telefono");
        $data->empresa = $request->input("empresa");
        $data->mensaje = $request->input("mensaje");

        $data->save();

        $message=["message" => "Registro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }


}
