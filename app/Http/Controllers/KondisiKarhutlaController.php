<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KondisiKarhutla;

class KondisiKarhutlaController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = KondisiKarhutla::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => KondisiKarhutla::all()
        ]);
    }
}
