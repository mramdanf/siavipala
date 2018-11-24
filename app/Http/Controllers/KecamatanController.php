<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function list()
    {
        return response([
            'data' => Kecamatan::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kota_kab_id' => 'required',
            'nama' => 'required'
        ]);
        
        $data = $request->all();

        $kecamatan = new Kecamatan;
        $kecamatan->kota_kab_id = $data['kota_kab_id'];
        $kecamatan->nama = $data['nama'];
        $kecamatan->save();

        return response([
            'message' => 'Create kecamatan sukses.'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kota_kab_id' => 'required',
            'nama' => 'required',
            'id' => 'required'
        ]);
        
        $data = $request->all();

        $kecamatan = Kecamatan::find($data['id']);
        $kecamatan->kota_kab_id = $data['kota_kab_id'];
        $kecamatan->nama = $data['nama'];
        $kecamatan->save();

        return response([
            'message' => 'Update kecamatan sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, ['id'=>'required']);

        $kecamatan = Kecamatan::find($request->input('id'));
        $kecamatan->delete();

        return response([
            'message' => 'Delete kecamatan sukses.'
        ]);
    }
}
