<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KondisiKarhutlaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\KondisiKarhutla'::all()
        ]);
    }
}