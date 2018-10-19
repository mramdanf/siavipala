<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesaKelurahan;

class DesaKelurahanController extends Controller
{
    public function list()
    {
        return response([
            'data' => DesaKelurahan::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kecamatan_id' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        $desaKelurahan = new DesaKelurahan;
        $desaKelurahan->kecamatan_id = $data['kecamatan_id'];
        $desaKelurahan->nama = $data['nama'];

        if (!empty($data['posko_id']))
            $desaKelurahan->posko_id = $data['posko_id'];
        
        $desaKelurahan->save();

        return response([
            'message' => 'Create desa kelurahan sukses.'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kecamatan_id' => 'required',
            'nama' => 'required',
            'id' => 'required'
        ]);

        $data = $request->all();

        $desaKelurahan = DesaKelurahan::find($data['id']);
        $desaKelurahan->kecamatan_id = $data['kecamatan_id'];
        $desaKelurahan->nama = $data['nama'];

        if (!empty($data['posko_id']))
            $desaKelurahan->posko_id = $data['posko_id'];
        
        $desaKelurahan->save();

        return response([
            'message' => 'Update desa kelurahan sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $desaKelurahan = DesaKelurahan::find($request->input('id'));
        $desaKelurahan->delete();

        return response([
            'message' => 'Delete desa kelurahan sukses.'
        ]);
    }
}
