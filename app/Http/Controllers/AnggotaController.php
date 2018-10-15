<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Anggota'::all()
        ]);
    }
}
