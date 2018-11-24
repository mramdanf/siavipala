<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\Hotspot'::all()
        ]);
    }
}
