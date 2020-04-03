<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected function create(array $data)
    {
        try{
            DB::beginTransaction();
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->password = Hash::make($data['password']);

            $detail_user = new User_detail;
            $detail_user->zip_code = $data['zip_code'];
            $detail_user->state = $data['state']; 
            $detail_user->city = $data['city'];
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
