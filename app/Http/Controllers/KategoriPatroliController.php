<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KategoriPatroliController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\KategoriPatroli'::all()
        ]);
    }
}
