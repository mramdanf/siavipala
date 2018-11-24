<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtifisialParamController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\ArtifisialParam'::all()
        ]);
    }
}
