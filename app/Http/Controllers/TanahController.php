<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanahController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Tanah'::all()
        ]);
    }
}
