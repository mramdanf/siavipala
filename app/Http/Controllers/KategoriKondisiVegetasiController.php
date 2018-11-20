<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriKondisiVegetasiController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\KategoriKondisiVegetasi'::all()
        ]);
    }
}
