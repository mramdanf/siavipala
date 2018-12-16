<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cuaca;

class CuacaController extends Controller
{
    public function list(Request $req)
    {
        if ($req->has('key'))
        {
            $cuacas = Cuaca::where('nama', 'ilike', '%'.$req->input('key').'%')->get();

            return response([
                'data' => $cuacas
            ]);
        }

        return response([
            'data' => 'App\Models\Cuaca'::all()
        ]);
    }
}
