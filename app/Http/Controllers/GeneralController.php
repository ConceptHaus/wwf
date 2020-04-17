<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Newsletter;

class GeneralController extends Controller
{
    public function contacto(Request $request){
        
        $contacto = new Contacto;
        $contacto->nombre = $request->name;
        $contacto->email = $request->email;
        $contacto->asunto = $request->subject;
        $contacto->telefono = $request->phone;
        $contacto->comentario = $request->message;
        $contacto->save();
        
        return response()->json([
            'status'=>'sucess',
            'message'=>'Mensaje recibido'
        ],201);
    }

    public function newsletter(Request $request){
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return response()->json([
            'status'=>'success',
            'message'=>'Se agregó un correo a newsletter'
        ]);
    }
}
