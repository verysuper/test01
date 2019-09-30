<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $http = new \GuzzleHttp\Client;

        try{
            $response = $http->post('http://test01.local/oauth/token',[
                'form_params'=>[
                    'grant_type'=>'password',
                    'client_id'=>2,
                    'client_secret'=>'hOxAKaHZiq6JlDEDX91NvKIHzoF8zVEVKXFpjrPf',
                    'username'=>$request->username,
                    'password'=>$request->password,
                ]
            ]);
            return $response->getBody();
        }catch (\GuzzleHttp\Exception\BadResponseException $e){
            if($e->getCode() === 400){
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            }elseif ($e->getCode() === 401){
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server.', $e->getCode());
        }
    }
}
