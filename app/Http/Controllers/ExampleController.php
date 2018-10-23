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
        dd(base_path('public'));
    }
}
