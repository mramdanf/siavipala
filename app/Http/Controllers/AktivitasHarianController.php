<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AktivitasHarian;

class AktivitasHarianController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = AktivitasHarian::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => 'App\Models\AktivitasHarian'::all()
        ]);
    }
}
