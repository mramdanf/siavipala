<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VegetasiController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\Vegetasi'::all()
        ]);
    }
}
