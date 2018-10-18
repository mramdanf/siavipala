<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daops;

class DaopsController extends Controller
{
    public function list()
    {
        return response([
            'data' => Daops::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'provinsi_id' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        $daops = new Daops;
        $daops->provinsi_id = $data['provinsi_id'];
        $daops->nama = $data['nama'];
        $daops->save();

        return response([
            'message' => 'Create daops sukses.'
        ]);
    }
}
