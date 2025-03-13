<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "<h1>Hello world</h1>";
});
Route::get("/mycontroller/{id?}",
[Mycontroller::class,'myfunction']);

Route::post('/mycontroller/{id?}',
[Mycontroller::class,'myfunction']);

Route ::get('/',function(){
    return view('layouts.default');
});
Route ::get('/',[HomeController::class,'home'])->middleware([CheckLogin::class]);

Route ::get('/home',function(){
    return view('home');
});

Route ::get('/login',[LoginController::class,'index']);
Route ::post('/login',[LoginController::class,'login']);

Route ::get('/logout',function(){
    session()->forget('user');
    session()->flush();
    return redirect('/login');
});

Route ::get('/register',[RegisterController::class,'register']);
Route ::post('/register',[RegisterController::class,'create']);

Route ::get('/user',[UserController::class,'index']); 
Route ::get('/user/{id}',[UserController::class,'edit']);
Route ::put ('/user',[UserController::class,'saveEdit']);
Route ::delete ('/user',[UserController::class,'delete']);

Route ::get('/home',[HomeController::class,'home']);
Route ::post('/home',[HomeController::class,'home'])->middleware([CheckLogin::class]);

Route ::get('/product',[ProductController::class,'index'])->middleware([CheckLogin::class]);
Route ::post('/product',[ProductController::class,'store'])->middleware([CheckLogin::class]);
Route::get('/loginOSSD', function () {
    return view('/loginOSSD');
});
