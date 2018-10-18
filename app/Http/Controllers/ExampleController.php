<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://sipongi.menlhk.go.id/action/indohotspot');
        $res = $res->getBody()->getContents();
        $res = json_decode($res, TRUE);

        dd($res);
    }
}
