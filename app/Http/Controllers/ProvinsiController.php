<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

use App\Models\Provinsi;
use App\Models\KegiatanPatroli;
use App\Models\Pemadaman;
use App\Models\Daops;



class ProvinsiController extends Controller
{
    public function list()
    {
        return response([
            'data' => 'App\Provinsi'::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $prov_exist = Provinsi::where('nama', 'ilike', $request->input('nama'))
                                ->count();

        if ($prov_exist)
        {
            return response()
                ->json(array(
                    'message' => 'Create provinsi gagal, Nama provinsi '.$request->input('nama').' telah terdaftar.'), 
                    400);
        }

        $provinsi = new Provinsi;
        $provinsi->nama = $request->input('nama');
        $provinsi->save();

        return response([
            'message' => 'Create provinsi sukses.'
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'id' => 'required'
        ]);

        $data = $request->all();

        $provinsi = Provinsi::find($data['id']);
        $provinsi->nama = $data['nama'];
        $provinsi->save();

        return response([
            'message' => 'Update provinsi sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, ['id'=>'required']);

        $provinsi = Provinsi::find($request->input('id'));
        $provinsi->delete();

        return response([
            'message' => 'Delete provinsi sukses.'
        ]);
    }

    public function resume(Request $request)
    {
        $kode = $request->input('kode_provinsi');
        $year = $request->input('tahun');
        $today = date('Y-m-d');

        //////////// Statistik Harian //////////////////
        // Jumlah kegiatan patroli
        $filterHarian = function ($query) use ($kode, $today) {
            $query->where('provinsi.id', $kode)
                  ->where('tanggal_patroli', $today);
        };
        
        $kegiatanPatroliDarat = KegiatanPatroli::with([
                                'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi'
                            ])
                            ->whereHas('patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi', $filterHarian)
                            ->get()
                            ->toArray();

        $kegiatanPatroliUdara = KegiatanPatroli::with([
                                'patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi'
                            ])
                            ->whereHas('patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi', $filterHarian)
                            ->get()
                            ->toArray();

        $kegiatanPatroliDarat = (count($kegiatanPatroliDarat)) ? count($kegiatanPatroliDarat[0]['patroli_darat']) : 0;
        $kegiatanPatroliUdara = (count($kegiatanPatroliUdara)) ? count($kegiatanPatroliUdara[0]['patroli_udara']) : 0;

        // Jumlah kebakaran
        $jmlKebakaran = Pemadaman::with([
            'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliDarat.kegiatanPatroli'
        ])
        ->whereHas('patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi', function ($query) use ($kode) {
            $query->where('provinsi.id', $kode);
        })
        ->whereHas('patroliDarat.kegiatanPatroli', function ($query) use ($today) {
            $query->where('tanggal_patroli', $today);
        })
        ->count();

        //////////// Statistik Tahunan //////////////////
        // Jumlah kebakaran
        $jmlKebakaranTahun = Pemadaman::with([
            'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliDarat.kegiatanPatroli'
        ])
        ->whereHas('patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi', function ($query) use ($kode) {
            $query->where('provinsi.id', $kode);
        })
        ->whereHas('patroliDarat.kegiatanPatroli', function ($query) use ($year) {
            $query->whereYear('tanggal_patroli', '=', $year);
        })
        ->count();

        // Jumlah daops
        $jumlahDaops = Daops::with([
            'provinsi'
        ])
        ->whereHas('provinsi', function ($query) use ($kode) {
            $query->where('provinsi.id', $kode);
        })
        ->count();

        return response([
            'query' => array(
                'tahun' => $year,
                'kode_provinsi' => $kode,
            ),
            'statistik_harian' => [
                'kegiatan_patroli' => (int) $kegiatanPatroliDarat + (int) $kegiatanPatroliUdara,
                'kebakaran' => $jmlKebakaran
            ],
            'statistik_tahunan' => [
                'kebakaran' => $jmlKebakaranTahun,
                'daops' => $jumlahDaops
            ]
        ]);
    }
}
