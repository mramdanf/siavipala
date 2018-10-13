<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurahHujanController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\CurahHujan'::all()
        ]);
    }
}
