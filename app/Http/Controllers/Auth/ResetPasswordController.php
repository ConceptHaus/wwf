<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    public function reset(Request $request) {
        $token = $request->token;
        $email = DB::table('password_resets')->where('token',$token)->first();
        if($email){
            $user = User::where('email',$email->email)->first();
            $user->password = Hash::make($request->password);

            $user->save();

            return response([
                "status"=>"success",
                "data"=>$user
            ],201);
        }

        return response([
            "status"=>"error",
            "data"=>"Código inválido"
        ],401);
        
    }
}
