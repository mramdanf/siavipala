<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class ProvinsiController extends Controller
{
    public function all()
    {
        return response([
            'data' => 'App\Provinsi'::all()
        ]);
    }

    public function resume(Request $request)
    {
        $kode = $request->input('kode');

        $kodeProvinsi = function ($query) use ($kode) {
            $query->where('provinsi.id', $kode)
                  ->where('tanggal_patroli', '2016-02-24');
        };
        
        $kegiatanPatroliDarat = 'App\KegiatanPatroli'::with([
                                'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi'
                            ])
                            ->whereHas('patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi', $kodeProvinsi)
                            ->get()
                            ->toArray();

        $kegiatanPatroliUdara = 'App\KegiatanPatroli'::with([
                                'patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi'
                            ])
                            ->whereHas('patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi', $kodeProvinsi)
                            ->get();

        // echo "<pre>";
        // print_r($kegiatanPatroliDarat);

        $kegiatanPatroliDarat = (count($kegiatanPatroliDarat)) ? count($kegiatanPatroliDarat[0]['patroli_darat']) : 0;
        $kegiatanPatroliUdara = (count($kegiatanPatroliUdara)) ? count($kegiatanPatroliUdara[0]['patroli_udara']) : 0;

        return response([
            'statistik_hari_ini' => [
                'kegiatan_patroli' => (int) $kegiatanPatroliDarat + (int) $kegiatanPatroliUdara
                // 'data' => $kegiatanPatroliDarat
            ]
        ]);
    }
}
