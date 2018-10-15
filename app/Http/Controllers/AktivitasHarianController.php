<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktivitasHarianController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\AktivitasHarian'::all()
        ]);
    }
}
