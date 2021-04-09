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
use App\Http\Controllers\Controller;

class BracketController extends Controller
{

    public function storeturnamen(Request $request)
    {
      

        dd($request->all());
        turnamen::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'total_member' => $request->total_member,
            'date_start' => Carbon::createFromFormat('m/d/Y', $request->date_start),
            'date_end' => Carbon::createFromFormat('m/d/Y', $request->date_end),
            'description' => $request->description

        ]);

        $turnamen = DB::table('turnamen')->latest('updated_at')->first();
        // dd($turnamen);
        // return redirect()->route('turnamen.addteam');
        return view("pages.addteam", compact('turnamen'));

    } 

    public function generatebracket(Request $request){
        $mem = $request->member_name;
        shuffle($mem);
        for ($i = 0; $i < ($request->total_member); $i++){
            member::create([
                'turnamen_id' => $request->turnamen_id,
                'name' => $mem[$i]             
            ]);
        }
        // $id = $request->turnamen_id;
        // $members = DB::table('member')
        //         ->where('turnamen_id', '=', $id)
        //         ->get();
        // // dd($members);
        // $turney = DB::table('turnamen')
        //         ->where('id', '=', $id)
        //         ->get();
        // // dd($turney);
        // $year = Carbon::parse($turney[0]->date_start)->year;
        // return view('pages.bracket', compact('id','turney','members','year'));

        return redirect()->route('turnamen.bracket', ['id' => $request->turnamen_id]);

        
    }

    public function show(Request $request)
    {

        // dd($request->all());
        member::create([
            'id' => ($request->name).timestamp(),
            'turnamen_id' => turnamen::find($id),
            'name' => ($request->name)
            // 'goldmedal' => ($request->goldmedal),
            // 'silvermedal' => $request->silvermedal,
            // 'bronzemedal' => $request->bronzemedal
        ]);
        return view('dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        // dd($request->all());
        DB::table('member')->where('name',$request->name)->update([
            'gold_medal' => $request->gold_medal,
            'silver_medal' => $request->silver_medal,
            'bronze_medal' => $request->bronze_medal,
            'total_medal' => ($request->gold_medal)*3+($request->silver_medal)*2+($request->bronze_medal)
        ]);
        // $id = $request->turnamen_id;
        // $members = DB::table('member')
        //         ->where('turnamen_id', '=', $id)
        //         ->get();
        // // dd($members);
        // $turney = DB::table('turnamen')
        //         ->where('id', '=', $id)
        //         ->get();
        // // dd($turney);
        // $year = Carbon::parse($turney[0]->date_start)->year;
        // return view('pages.bracket', compact('id','turney','members','year'));

        return \Redirect::back()->with('statusreport', 'Success to Report');
    }
    public function upgrade(Request $request)
    {
        dd($request);
    }
}
