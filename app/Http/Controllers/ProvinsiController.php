<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Provinsi;

class ProvinsiController extends Controller
{
    public function all()
    {
        $provinsi = Provinsi::all();

        return response([
            'data' => $provinsi
        ]);
    }
}
