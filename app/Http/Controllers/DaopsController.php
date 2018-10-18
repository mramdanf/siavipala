<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daops;

class DaopsController extends Controller
{
    public function list()
    {
        return response([
            'data' => Daops::all()
        ]);
    }
}
