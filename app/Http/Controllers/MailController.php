<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\email;
use App\Models\subscribe;
use Redirect;

class MailController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }
    public function sent(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:rfc,dns',
            'subject'=>'required',
            'message'=>'required',
        ]);
        email::create($request->all());
        return (\Redirect::back())->with('statussending', 'Success to Sending Message');
    }
    public function subs(Request $request)
    {
        $request->validate([
            'subscribe'=>'required|email:rfc,dns',
        ]);
        subscribe::create($request->all());
        return (\Redirect::back())->with('statussub', 'Success to Sending Email');
    }

    
}