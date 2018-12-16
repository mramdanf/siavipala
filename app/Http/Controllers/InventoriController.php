<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inventori;

class InventoriController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = Inventori::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => Inventori::all()
        ]);
    }
}
