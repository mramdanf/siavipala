<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daops;

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

    public function update(Request $request)
    {
        $this->validate($request, [
            'provinsi_id' => 'required',
            'nama' => 'required',
            'id' => 'required'
        ]);

        $data = $request->all();

        $daops = Daops::find($data['id']);
        $daops->provinsi_id = $data['provinsi_id'];
        $daops->nama = $data['nama'];
        $daops->save();

        return response([
            'message' => 'Update daops sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $daops = Daops::find($request->input('id'));
        $daops->delete();

        return response([
            'message' => 'Delete daops sukses.'
        ]);
    }
}
