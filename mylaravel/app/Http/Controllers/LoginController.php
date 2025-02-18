<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function login (Request $request){
        
        $user = User::where('email', $request->email)->first();

        if($user &&$request->password && Hash::check($request->password,$user->password)){
    
            session()->forget('error');
            session(['user' => $user]);
            return redirect('/user');
        }
        else{
            session(['error' => 'ข้อมูลเข้าสู่ระบบไม่ถูกต้อง ']);
            return view('login' , ['email' => $request->email]);
            return redirect('/login');
        }
   
    }
}
