<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login(){
        return view('backend.login_form');
    }

    public function do_login(Request $request){
        // validation
        // dd($request->all());
        $validation = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validation->fails()){
           //
        }
        else{
            //
        }

        //check
        $credientials = $request->except('_token');

        $check = Auth::attempt($credientials);

        if($check){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()-back();
        }

    }
}
