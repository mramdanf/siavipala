<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatelitController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\Satelit'::all()
        ]);
    }
}
