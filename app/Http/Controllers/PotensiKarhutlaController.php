<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PotensiKarhutla;

class PotensiKarhutlaController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = PotensiKarhutla::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => PotensiKarhutla::all()
        ]);
    }
}
