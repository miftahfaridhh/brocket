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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turney = turnamen::all();
        // dd ($turnamen);
        $turney = DB::table('turnamen')->where('user_id',(Auth::user()->id))->get();
        return view('pages.dashboard', compact('turney'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $members = DB::table('member')
                ->where('turnamen_id', '=', $id)
                ->get();
        // dd($members);

        $turney = DB::table('turnamen')
                ->where('id', '=', $id)
                ->get();
        // dd($turney);

        $year = Carbon::parse($turney[0]->date_start)->year;
        return view('pages.bracket', compact('id','turney','members','year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = DB::table('member')
                ->where('turnamen_id', '=', $id)
                ->get();
        // dd($members);

        $turney = DB::table('turnamen')
                ->where('id', '=', $id)
                ->get();
        // dd($turney);

        return view('pages.edit', compact('turney','members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        for ($i = 0; $i < ($request->total_member); $i++){
            return DB::table('member')->where('name',$request->name[$i])->update([
                'gold_medal' => $request->gold_medal[$i],
                'silver_medal' => $request->siver_medal[$i],
                'bronze_medal' => $request->bronze_medal[$i]
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

        return view('pages.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
