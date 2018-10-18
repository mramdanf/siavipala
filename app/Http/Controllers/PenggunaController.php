<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\LevelAkses;
use App\HakAkses;

class PenggunaController extends Controller
{
    public function list()
    {
        return response([
            'data' => Pengguna::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

       $data = $request->all();
       
       $pengguna = new Pengguna;
       $pengguna->nama = $data['nama'];
       $pengguna->email = $data['email'];
       $pengguna->password = app('hash')->make($data['password']);
       $pengguna->save();

       return response([
           'message' => 'Create pengguna sukses.'
       ]);
    }
}
