<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use GoCardlessPro\Client as GoCardlessClient;

class LicencesController extends Controller
{
    protected $sessionId;

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
    public function index(GoCardlessClient $client, Request $request)
    {
        $user = Auth::User();
        $sessionId = md5($user->email);
        $request->session()->put('goCardlessKey', $sessionId);

        // $client = $client->redirectFlows()->create([
        //   "params" => ["description" => "Wine boxes",
        //                "session_token" => $sessionId,
        //                "success_redirect_url" => config('services.goCardless.redirectUrl'),
        //                "prefilled_customer" => [
        //                  "given_name" => $user->first_name,
        //                  "family_name" => $user->last_name,
        //                  "email" => $user->email
        //                ]]
        // ]);

        $client = $client->mandatePdfs()->create([
          "params" => ["account_number" => "44779911",
                       "branch_code" => "200000",
                       "country_code" => "GB"]
        ]);

        return view('licences', compact('user', 'client'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(GoCardlessClient $client, Request $request)
    {
        $sessionId = $request->session()->pull('goCardlessKey');

        $client = $client->redirectFlows()->complete($request->redirect_flow_id, [
          "params" => ["session_token" => $sessionId]
        ]);

        dd($client);

        return redirect()->action('LicencesController@index');
    }
}
