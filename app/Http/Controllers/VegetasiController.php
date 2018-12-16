<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vegetasi;

class VegetasiController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = Vegetasi::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => Vegetasi::all()
        ]);
    }
}
