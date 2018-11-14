<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_anggota_id' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required'
        ]);

        $data = $request->all();

        $anggota = new Anggota;
        $anggota->kategori_anggota_id = $data['kategori_anggota_id'];
        $anggota->nama = $data['nama'];
        $anggota->email= $data['email'];
        $anggota->no_telepon = $data['no_telepon'];
        $anggota->save();

        $insertedAnggota = Anggota::where('id', $anggota->id)->first()->toArray();

        return response([
            'message' => 'Create anggota patroli sukses.',
            'anggotaBaru' => $insertedAnggota
        ]);
    }

    public function list()
    {
        return response([
            'data' => 'App\Anggota'::all()
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

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $id = $request->all()['id'];

        $anggota = Anggota::find($id);
        $anggota->delete();

        return response([
            'message' => 'Delete anggota patroli sukses.'
        ]);
    }
}
