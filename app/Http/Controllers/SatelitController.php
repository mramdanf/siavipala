<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Satelit;

class SatelitController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = Satelit::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => Satelit::all()
        ]);
    }
}
