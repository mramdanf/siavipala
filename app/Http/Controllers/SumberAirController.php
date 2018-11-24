<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumberAirController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\SumberAir'::all()
        ]);
    }
}
