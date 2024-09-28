<?php
use App\Http\Controllers\form;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
        return view('home');
     });
     route::get('/form',[form::class ,"index"]);
route::post('/form',[form::class ,"form"]);