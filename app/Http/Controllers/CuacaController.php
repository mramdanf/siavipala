<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuacaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Cuaca'::all()
        ]);
    }
}
