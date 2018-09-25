<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|email',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }
}
