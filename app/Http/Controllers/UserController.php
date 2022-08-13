<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Tymon\JWTAuth\Facades\JWTAuth;



class UserController extends Controller
{   
    public function authenticate(Request $request){
        $credential = $request->only('username', 'password');
        $validator = FacadesValidator::make($credential,[
            'username' => 'required',
            'password' => 'required'
        ] );
        if(!$validator->fails()){
            try{
                if(!$token =JWTAuth::attempt($credential)){
                    return response()->json([
                        'status'=>false,
                        'mesasage'=>'Invalid credentials'
                ]);
                }
            }catch (\Tymon\JWTAuth\Exceptions\JWTException $e){
                return response()->json([
                    'status'=>false,
                    'error'=>$e->getMessage(),
                    'mesasage'=>'Invalid credentials'
                ]);
            }
            return response()->json([
                'status'=>true,
                'token'=>compact('token'),
                'message'=>'Valid credentials'
            ]);
        } else{
            return response()->json([
                'status'=> false,
                'errors'=>$validator->errors()
            ]);
        }
    }

    public function register(Request $request){

        return response()->json([
            'message'=>'You can continue',
            'message'=>$request->get('user')
        ]);
    }
    //
}
