<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatroliController extends Controller
{
    public function listPatroli()
    {
        $patrolis = 'App\KegiatanPatroli'::with([

            // Patroli Darat
            'patroliDarat.kondisiVegetasi.vegetasi',
            'patroliDarat.kondisiVegetasi.kategoriKondisiVegetasi',
            'patroliDarat.kondisiVegetasi.kondisiKarhutla',
            'patroliDarat.kondisiVegetasi.potensiKarhutla',

            
            'patroliDarat.kondisiTanah.tanah',
            'patroliDarat.kondisiTanah.kondisiKarhutla',
            'patroliDarat.kondisiTanah.potensiKarhutla',
            
            'patroliDarat.kondisiSumberAir.sumberAir',
            'patroliDarat.desaKelurahan.kecamatan.kotakab.daops.provinsi',
            'patroliDarat.curahHujan',
            'patroliDarat.cuacaPagi',
            'patroliDarat.cuacaSiang',
            'patroliDarat.cuacaSore',

            // Patroli Udara
            'patroliUdara.desaKelurahan.kecamatan.kotakab.daops.provinsi',

            // Dokumentasi
            'dokumentasi',
            // Inventori Patroli
            'inventoriPatroli',
            // Kategori Patroli
            'kategoriPatroli',
            // Hotspot
            'hotspot',
            // Aktivitas Harian
            'aktivitasHarianPatroli.aktivitasHarian',
            // Anggota Patroli
            'anggotaPatroli.anggota'
            ])
            ->where('tanggal_patroli', '2016-02-24')
            ->get();

        return response([
            'data' => $patrolis
        ]);
    }
}
