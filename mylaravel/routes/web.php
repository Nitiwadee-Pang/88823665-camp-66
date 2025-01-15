<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route ::get('/login',[LoginController::class,'index']);
Route ::get('/register',[RegisterController::class,'register']);
