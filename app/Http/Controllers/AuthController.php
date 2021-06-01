<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use GeneralTrait;

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

            $guard = Auth::guard('admin-api');
            $token = $guard->attempt($credentials);
            
            if (!$token){
                return $this->returnError('E001', 'Login ou mot de passe invalide');
            }
            
            return $this->returnData('token', $token, "login succsessfully");



            //return token (jwt)

        } catch (\Exception $e) {

            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }


    //Logout 

    public function logout(Request $request)
    {

        $token = $request->header('token');
        return $token;
        if ($token) {
            try {
                JWTAuth::setToken($token)->invalidate(); //logout
            } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return $this->returnError('', 'samething went wrong');
            }

            return $this->retournSuccessMessage('', 'logout successfuly');
        } else {
            $this->returnError('', 'samething went wrong');
        }
    }
}
