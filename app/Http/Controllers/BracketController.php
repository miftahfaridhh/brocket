<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\turnamenMember;

class BracketController extends Controller
{
    public function generate(Request $request)
    {

        // dd($request->all());
        turnamenMember::create([
            'turnamenId' => ($request->turnamenName).($request->email),
            'userId' => $request->turnamenName,
            'clubName' => $request->clubName
        ]);
        return view('pages.test');
    }
}
