<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriAnggotaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\KategoriAnggota'::all()
        ]);
    }
}
