<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\AnggotaPatroli;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        $anggotaPatroli = AnggotaPatroli::with([
            'anggota.kategoriAnggota'
        ])
        ->where('kegiatan_patroli_id', 43)
        ->get();

        return response([
            'data' => $anggotaPatroli
        ]);
    }
}
