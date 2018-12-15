<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurahHujan;

class CurahHujanController extends Controller
{
    public function list(Request $request)
    {
        if ($request->has('key'))
        {
            $curahHujans = CurahHujan::where('nama', 'ilike', '%'.$request->input('key').'%')->get();
            return response([
                'data' => $curahHujans
            ]);
        }

        return response([
            'data' => CurahHujan::all()
        ]);
    }
}
