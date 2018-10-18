<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KotaKab;

class KotakabController extends Controller
{
    public function list()
    {
        return response([
            'data' => KotaKab::all()
        ]);
    }
}
