<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class UserController extends Controller
{
    public function edit(Request $request){
        $user = Auth::guard()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->detail->empresa = $request->company;
        $user->detail->puesto = $request->puesto;
        $user->detail->sector = $request->sector;
        $user->detail->save();
        $user->save();
        return response()->json([
            "status"=>"success",
            "message"=>"Datos Actualizados",
            "data"=>$user
        ]);
    }
}
