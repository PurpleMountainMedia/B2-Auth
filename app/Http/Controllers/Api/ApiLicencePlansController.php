<?php

namespace App\Http\Controllers\Api;

use App\LicencePlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LicencePlan as LicencePlanResource;

class ApiLicencePlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return LicencePlanResource::collection(
            LicencePlan::minPupils($request->minPupils)
                       ->maxPupils($request->maxPupils)
                       ->minSchools($request->minSchools)
                       ->maxSchools($request->maxSchools)
                       ->with($request->with ?: [])
                       ->basicResponse()
        );
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
     * @param  \App\LicencePlan  $licencePlan
     * @return \Illuminate\Http\Response
     */
    public function show(LicencePlan $licencePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LicencePlan  $licencePlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LicencePlan $licencePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LicencePlan  $licencePlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicencePlan $licencePlan)
    {
        //
    }
}
