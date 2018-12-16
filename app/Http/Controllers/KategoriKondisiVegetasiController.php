<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KategoriKondisiVegetasi;

class KategoriKondisiVegetasiController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = KategoriKondisiVegetasi::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => KategoriKondisiVegetasi::all()
        ]);
    }
}
