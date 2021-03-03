<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function login()
    {
        return view('pages.login');
    }
    public function register()
    {
        return view('pages.register');
    }
    public function create()
    {
        return view('pages.create');
    }
}

