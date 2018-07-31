<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Hash;
use Auth;

class ApiUsersController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, $user->getValidationRules(), $user->getValidationMessages());

        $user->update([
            'name' => "{$request->first_name} {$request->last_name}",
            'email' => $request->has('email') ? $request->email : $user->email,
            'phone' => $request->has('phone') ? $request->phone : $user->phone,
            'password' => $request->has('password') ? Hash::make($request->password) : $user->password,
            'product_updates_marketing' => $request->has('product_updates_marketing') ? $request->product_updates_marketing : $user->product_updates_marketing,
            'product_notifications_marketing' => $request->has('product_notifications_marketing') ? $request->product_notifications_marketing : $user->product_notifications_marketing,
        ]);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Return the current authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        $user = Auth::user();

        return new UserResource($user);
    }
}
