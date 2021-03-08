<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BracketController extends Controller
{
    public function generate(Request $request)
    {
        
        dump($request->all());
        // report::create($request->all());
        return view('dashboard');;
    }
}
