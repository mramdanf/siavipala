<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeteranganLokasiController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\KeteranganLokasi'::all()
        ]);
    }
}
