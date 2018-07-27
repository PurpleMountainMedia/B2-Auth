<?php

namespace App\Http\Controllers\Api;

use App\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Organisation as OrganisationResource;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('list', Organisation::class);

        return OrganisationResource::collection(
            Organisation::with($request->with ?: []
        )->responseAdapter());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Organisation $organisation)
    {
        $this->authorize('create', Organisation::class);

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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Organisation $organisation)
    {
        $this->authorize('view', $organisation);

        $organisation->load($request->with ?: []);

        return new OrganisationResource($organisation);
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
        $this->authorize('update', $organisation);

        $this->validate($request, $organisation->getValidationRules(), $organisation->getValidationMessages());

        $organisation->update([
            'name' => updateOrKeep($request, $organisation, 'name'),
            'type' => updateOrKeep($request, $organisation, 'type'),
        ]);

        $organisation->load($request->with ?: []);
        return new OrganisationResource($organisation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        $this->authorize('delete', $organisation);

        $organisation->delete();
        return deletionSuccessful();
    }
}
