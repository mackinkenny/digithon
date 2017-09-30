<?php

namespace App\Http\Controllers;

use App\Group;
use App\Position;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function settings()
    {
        $groups = Group::all();
        return view('layoutspages.setting',['groups'=>$groups]);
    }
}
