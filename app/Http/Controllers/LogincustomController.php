<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\User;

class LogincustomController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ]))
        {
            $user = User::where('email',$request->email)->first();
            if($user->is_active())
            {
             if($user->is_admin())
             {
              return redirect()->route('home');
             }  
             
             return redirect()->route('welcome');
            
            }
            else
            {
            dd("You are suspended for improper activity");          
            }
        return redirect()->back();
    }
}
    
    public function index()
    {
        return view('auth/login');
    }
}
