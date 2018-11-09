<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use PDF;

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
        $html = '<html><body>'
			. '<p>Put your html here, or generate it with your favourite '
			. 'templating system.</p>'
            . '</body></html>';
            
        return PDF::load($html, 'A4', 'portrait')->show();
    }
}
