<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KeteranganLokasi;

class KeteranganLokasiController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = KeteranganLokasi::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => KeteranganLokasi::all()
        ]);
    }
}
