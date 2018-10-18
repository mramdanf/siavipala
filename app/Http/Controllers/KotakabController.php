<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KotaKab;

class KotakabController extends Controller
{
    public function list()
    {
        return response([
            'data' => KotaKab::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'daops_id' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        $kotakab = new KotaKab;
        $kotakab->daops_id = $data['daops_id'];
        $kotakab->nama = $data['nama'];
        $kotakab->save();

        return response([
            'message' => 'Create kotakab sukses.'
        ]);
    }
}
