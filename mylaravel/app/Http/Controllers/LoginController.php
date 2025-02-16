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
        // echo "<pre>";
        // print_r($request->email);
        // print_r($request->password);
        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password,$user->password)){
            session()->forget('error');
            session(['user' => $user]);
            return redirect('/');
        }
        else{
            dd($user,$request,Hash::check($request->password,$user->password));
            session(['error' => 'ข้อมูลเข้าสู่ระบบไม่ถูกต้อง ']);
            return view('login' , ['email' => $request->email]);
            return redirect('/login');
        }
    //     $user = User::where('email', $request->email)->first();

    // if ($user && Hash::check($request->password, $user->password)) {
    //     return redirect('/');
    // } else {
    //     session(['error' => 'ข้อมูลเข้าสู่ระบบไม่ถูกต้อง']);
    //     return redirect('/login');
    // }
        
        //return redirect('/');
    }
}
