<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Auth;


class authController extends Controller
{
    
    public function register() {
        return view('register');
    }

    public function postregister(Request $re) {

        // dd($re);
        $val = $re->validate([
            'name'      =>'required',
            'email'     =>'required|email',
            'password'  =>'required',
        ]);
       
        
        $user = new User();

        $user->name      = $re->name;
        $user->email     = $re->email;
        // $user->email     = $user->email_verified_at;
        $user->password  = Hash::make($re->password);
        $user->save();
        
        return Redirect('/register');

    }

    public function login() {
        return view('login');
    }

    public function postlogin(Request $re) {
        $login = $re->only('email','password');
        // dd($login);
        
        if(Auth::attempt($login))
        {
            return Redirect('/home');
        } else  {

            return Redirect('/login');
        }
    }

    public function logout() {

        Auth::logout();

        return redirect('/login');

    }

}
