<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoriController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Models\Inventori'::all()
        ]);
    }
}
