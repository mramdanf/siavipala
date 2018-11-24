<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurahHujan;

class CurahHujanController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\CurahHujan'::all()
        ]);
    }
}
