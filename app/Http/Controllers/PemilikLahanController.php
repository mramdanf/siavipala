<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PemilikLahan;

class PemilikLahanController extends Controller
{
    public function list (Request $r)
    {
        if ($r->has('key'))
        {
            $data = PemilikLahan::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => 'App\Models\PemilikLahan'::all()
        ]);
    }
}
