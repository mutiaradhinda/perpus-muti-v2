<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Form login',
       ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){
            // if(Auth::user()->id_user_role == 1){
            //     $request->session()->regenerate();    
            //     return redirect()->intended('/dashboard');
            // }

            // if(Auth::user()->id_user_role == 2){
            //     // dd('ini pegawai');
            //     $request->session()->regenerate();    
            //     return redirect()->intended('/dashboard');
            // }

            $request->session()->regenerate();    
                return redirect()->intended('/dashboard');
            
            
        }

        return back()->with('loginError', 'Login Failed');  

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
    
}
