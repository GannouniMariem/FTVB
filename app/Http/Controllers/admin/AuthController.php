<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use GeneralTrait;


    public function show(){

        return view('back-office.auth.login');
    }

    public function showRegister(){

        return view('back-office.auth.register');
    }

    public function login(Request $request)
    {

        try {

            //validation

            $rules = [
                'email' => 'required',
                'password' => 'required'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {

                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login

            $credentials = $request->only(['email', 'password']);

            /** @var MyGurdClass $guard */

            $guard = Auth::guard('api');
            $token = $guard->attempt($credentials);
            $users       =   User::where(['email' => $credentials['email']])->first();
            if (!$token){
                return Redirect::back()->with('error', 'Login ou mot de passe invalide');
            }
            
            Auth::login($users);
            return redirect('/admin');



            //return token (jwt)

        } catch (\Exception $e) {

            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }

    public function create(Request $request)
    {
        $user = new User();

        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect('/login');

    }


    //Logout 

    public function logout(Request $request){
        
        Auth::logout();
        return redirect('/login');
   }
}
