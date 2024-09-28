<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //
    public function index()  {
        return view("home");
    
    }
    
    
    public function form(Request $request)  {
        echo"<pre>";
      print_r($request->all());
    
    
    }
    
    
    
    
    
    }

