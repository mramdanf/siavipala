<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SumberAir;

class SumberAirController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = SumberAir::where('name', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => 'App\Models\SumberAir'::all()
        ]);
    }
}
