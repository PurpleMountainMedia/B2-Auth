<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class OrganisationsController extends Controller
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
        $user = Auth::User();
        return view('organisations', compact('user'));
    }
}
