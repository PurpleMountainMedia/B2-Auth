<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Organisation;

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

    /**
     * Add a new organisation
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::User();
        return view('organisations.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
        ]);

        $organisation = Organisation::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'created_by' => Auth::user()->id,
        ]);
    }
}
