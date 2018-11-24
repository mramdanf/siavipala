<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilikLahanController extends Controller
{
    public function list ()
    {
        return response([
            'data' => 'App\Models\PemilikLahan'::all()
        ]);
    }
}
