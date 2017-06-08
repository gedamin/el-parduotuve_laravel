<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //    NOT USED, keep for exampe
    public function HomePage()
    {
        return view('home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //if not loged redirects to login page
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
