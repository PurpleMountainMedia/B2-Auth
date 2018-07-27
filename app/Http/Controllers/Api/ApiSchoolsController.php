<?php

namespace App\Http\Controllers\Api;

use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\School as SchoolResource;

class ApiSchoolsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('list', School::class);

        return SchoolResource::collection(
            School::with($request->with ?: []
        )->responseAdapter());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, School $school)
    {
        $this->authorize('create', School::class);

        $this->validate($request, $school->getValidationRules(['organisation_id' => 'required']), $school->getValidationMessages());

        $school = $school->create([
            'name' => $request->name,
            'organisation_id' => $request->organisation_id,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'address_town' => $request->address_town,
            'address_county' => $request->address_county,
            'address_postcode' => $request->address_postcode,
            'address_country' => $request->address_country,
            'phone' => $request->phone,
            'website' => $request->website,
            'meta' => $request->meta,
        ]);

        $school->load($request->with ?: []);
        return new SchoolResource($school);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, School $school)
    {
        $this->authorize('view', $school);

        $school->load($request->with ?: []);

        return new SchoolResource($school);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $this->authorize('update', $school);

        $this->validate($request, $school->getValidationRules(), $school->getValidationMessages());

        $school->update([
            'name' => updateOrKeep($request, $school, 'name'),
            'organisation_id' => updateOrKeep($request, $school, 'organisation_id'),
            'address_line1' => updateOrKeep($request, $school, 'address_line1'),
            'address_line2' => updateOrKeep($request, $school, 'address_line2'),
            'address_town' => updateOrKeep($request, $school, 'address_town'),
            'address_county' => updateOrKeep($request, $school, 'address_county'),
            'address_postcode' => updateOrKeep($request, $school, 'address_postcode'),
            'address_country' => updateOrKeep($request, $school, 'address_country'),
            'phone' => updateOrKeep($request, $school, 'phone'),
            'website' => updateOrKeep($request, $school, 'website'),
            'meta' => updateOrKeep($request, $school, 'meta'),
        ]);

        $school->load($request->with ?: []);
        return new SchoolResource($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->authorize('delete', $school);

        $school->delete();
        return deletionSuccessful();
    }
}
