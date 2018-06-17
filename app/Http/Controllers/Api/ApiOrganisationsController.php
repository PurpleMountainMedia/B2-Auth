<?php

namespace App\Http\Controllers\Api;

use App\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ApiOrganisationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Organisation $organisation)
    {
        $this->validate($request, $organisation->getValidationRules(), $organisation->getValidationMessages());
        $organisation = $organisation->create([
            'name' => $request->name,
            'type' => $request->type
        ]);
        if ($organisation) {
            Auth::User()->organisations()->attach($organisation->id, ['default' => $request->is_default ? true : false]);
        }

        return ['data' => $organisation];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        //
    }
}
