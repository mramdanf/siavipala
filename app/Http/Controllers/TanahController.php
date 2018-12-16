<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tanah;

class TanahController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = Tanah::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => Tanah::all()
        ]);
    }
}
