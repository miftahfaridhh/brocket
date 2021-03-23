<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\turnamen;
use App\Models\member;
use App\Models\User;
use Auth;
use Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    // public function show(Request $request)
    // {  
    //     $turney = turnamen::all();
    //     $turneymem = turnamenMember::all();
    //     return view('pages.turnamen', compact('turney','turneymem'));
    // }
    public function addteam ($name){
        $turnamen = DB::table('turnamen')->latest('updated_at')->first();
        // dd($turnamen);
        return view("pages.addteam", compact('turnamen'));
    }
}