<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //

    public function login() {


        return view('backend.auth.login');
    }

    public function postLogin(Request $request) {

        $inputs = $request->all();

        if( \Auth::attempt(array('name' => $inputs['username'], 'password' => $inputs['password'])) )
        {
            return \Redirect::action('Backend\HomeController@index');
        }else{
            return \Redirect::action('Backend\AuthController@login')->with('error', true);
        }
    }

    public function logout() {

        \Auth::logout();

        return \Redirect::action('Backend\AuthController@login');
    }
    
}
