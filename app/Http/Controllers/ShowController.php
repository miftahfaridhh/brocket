<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Request $request)
    {  
        $turney = turnamen::all();
        $turneymem = turnamenMember::all();
        return view('pages.turnamen', compact('turney','turneymem'));
    }
}