<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiKarhutlaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\PotensiKarhutla'::all()
        ]);
    }
}
