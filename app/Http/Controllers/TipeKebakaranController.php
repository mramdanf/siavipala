<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipeKebakaran;

class TipeKebakaranController extends Controller
{
    public function list (Request $r)
    {
        if ($r->has('key'))
        {
            $data = TipeKebakaran::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => TipeKebakaran::all()
        ]);
    }
}
