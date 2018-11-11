<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipeKebakaran;

class TipeKebakaranController extends Controller
{
    public function list ()
    {
        return response([
            'data' => TipeKebakaran::all()
        ]);
    }
}
