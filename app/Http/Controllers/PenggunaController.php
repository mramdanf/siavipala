<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\LevelAkses;
use App\HakAkses;

class PenggunaController extends Controller
{
    public function list()
    {
        return response([
            'data' => Pengguna::all()
        ]);
    }
}
