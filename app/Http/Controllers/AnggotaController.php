<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Anggota'::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_anggota_id' => 'required'
        ]);

        $data = $request->all();

        $anggota = new Anggota;
        $anggota->kategori_anggota_id = $data['kategori_anggota_id'];
        $anggota->nama = $data['nama'];
        $anggota->email= $data['email'];
        $anggota->no_telepon = $data['no_telepon'];
        $anggota->save();

        return response([
            'message' => 'Create anggota patroli sukses.'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kategori_anggota_id' => 'required',
            'id' => 'required'
        ]);

        $data = $request->all();

        $anggota = Anggota::find($data['id']);

        $anggota->kategori_anggota_id = $data['kategori_anggota_id'];
        $anggota->nama = $data['nama'];
        $anggota->email= $data['email'];
        $anggota->no_telepon = $data['no_telepon'];
        $anggota->save();

        return response([
            'message' => 'Update anggota patroli sukses.'
        ]);
    }
}
