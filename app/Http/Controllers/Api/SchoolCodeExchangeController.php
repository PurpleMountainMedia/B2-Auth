<?php

namespace App\Http\Controllers\Api;

use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolCodeExchangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }

    public function exchange(Request $request)
    {
        $this->validate($request, [
            'code' => 'required'
        ]);
        
        return ['id' => School::first()->id];
    }

    public function options()
    {
        //
    }
}
