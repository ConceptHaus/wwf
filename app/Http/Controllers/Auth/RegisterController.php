<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use App\UserDetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        try{
            DB::beginTransaction();
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->password = Hash::make($data['password']);

            $detail_user = new UserDetail;
            $detail_user->empresa = $data['company'];
            $detail_user->sector = $data['sector']; 
            $detail_user->puesto = $data['puesto'];
            $detail_user->interes = implode(",",$data['intereses']);
            $detail_user->consumo_electrico = $data['consumo'];
            $user->save();
            $user->detail()->save($detail_user);

            try{
                DB::commit();
                return response([
                    'status'=>'success',
                    'data'=>$user
                ],200);
            }catch(Exception $e){
                DB::rollBack();
                return response([
                    'status'=>'error',
                    'data'=>$e,
                    'type'=>'Server Error',
                ],500);
            }
            return response([
                'status'=>'success',
                'data'=>$user
            ],200);
        }catch(Exception $e){
            DB::rollBack();
            return response([
                'status'=>'error',
                'data'=>$e,
                'type'=>'Server Error',
            ],500);
        }
    }
}
