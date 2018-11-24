<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posko;

class PoskoController extends Controller
{
    public function list()
    {
        return response([
            'data' => Posko::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kecamatan_id' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        $posko = new Posko;
        $posko->kecamatan_id = $data['kecamatan_id'];
        $posko->nama = $data['nama'];
        $posko->save();

        return response([
            'message' => 'Create posko sukses.'
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

        $posko = Posko::find($data['id']);
        $posko->kecamatan_id = $data['kecamatan_id'];
        $posko->nama = $data['nama'];
        $posko->save();

        return response([
            'message' => 'Update posko sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $posko = Posko::find($request->input('id'));
        $posko->delete();

        return response([
            'message' => 'Delete posko sukses.'
        ]);
    }
}
