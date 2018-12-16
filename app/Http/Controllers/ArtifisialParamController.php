<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArtifisialParam;

class ArtifisialParamController extends Controller
{
    public function list(Request $r)
    {
        if ($r->has('key'))
        {
            $data = ArtifisialParam::where('nama', 'ilike', '%'.$r->input('key').'%')->get();
            return response([
                'data' => $data
            ]);
        }

        return response([
            'data' => 'App\Models\ArtifisialParam'::all()
        ]);
    }
}
