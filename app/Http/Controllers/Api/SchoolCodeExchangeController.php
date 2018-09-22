<?php

namespace App\Http\Controllers\Api;

use App\School;
use Illuminate\Http\Request;

class SchoolCodeExchangeController
{
    public function exchange(Request $request)
    {
        return ['id' => School::first()->id];
    }
}
