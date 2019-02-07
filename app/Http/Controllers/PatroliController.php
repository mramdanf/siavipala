<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPatroli;
use App\Models\PatroliDarat;
use App\Models\InventoriPatroli;
use App\Models\Hotspot;
use App\Models\AktivitasHarianPatroli;
use App\Models\KondisiVegetasi;
use App\Models\HasilUji;
use App\Models\KondisiSumberAir;
use App\Models\KondisiTanah;
use App\Models\Pemadaman;
use App\Models\PatroliUdara;
use App\Models\Dokumentasi;
use App\Models\Anggota;
use App\Models\AnggotaPatroli;
use App\Models\KategoriAnggota;
use App\Models\Daops;
use App\Models\Provinsi;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use Log;

class PatroliController extends Controller
{
    public function list(Request $request)
    {
        $data = $request->all();

        $patrolis = KegiatanPatroli::with([

            // Kategori Patroli
            'kategoriPatroli',
            // Inventori Patroli
            'inventoriPatroli.inventori',
            // Hotspot
            'hotspot.satelit',
            // Aktivitas Harian
            'aktivitasHarianPatroli.aktivitasHarian',
            // Anggota Patroli
            'anggotaPatroli.anggota.kategoriAnggota',
            // Dokumentasi
            'dokumentasi',

            // Patroli Darat
            'patroliDarat.desaKelurahan.kecamatan.kotakab.daops.provinsi',
            'patroliDarat.cuacaPagi',
            'patroliDarat.cuacaSiang',
            'patroliDarat.cuacaSore',
            'patroliDarat.curahHujan',
            'patroliDarat.potensiKarhutla',
            'patroliDarat.kondisiKarhutla',
            'patroliDarat.fwi',
            'patroliDarat.ffmcKkas',
            'patroliDarat.dcKk',
            'patroliDarat.keteranganLokasi',
            'patroliDarat.kondisiSumberAir.sumberAir',
            'patroliDarat.kondisiVegetasi.vegetasi',
            'patroliDarat.kondisiVegetasi.kategoriKondisiVegetasi',
            'patroliDarat.kondisiTanah.tanah',
            'patroliDarat.pemadaman.tipeKebakaran',
            'patroliDarat.pemadaman.pemilikLahan',

            // Patroli Udara
            'patroliUdara.desaKelurahan.kecamatan.kotakab.daops.provinsi',
            'patroliUdara.cuacaSiang',
            'patroliUdara.cuacaPagi',   
            'patroliUdara.cuacaSore',
            'patroliUdara.curahHujan',
            'patroliUdara.ffmcKkas',
            'patroliUdara.fwi',
            'patroliUdara.dcKk',
            // 'patroliUdara.',
            // 'patroliUdara.',
            // 'patroliUdara.',
            // 'patroliUdara.',
            
            ]);

        if (!empty($data['tanggal_patroli']))
            $patrolis->where('tanggal_patroli', $data['tanggal_patroli']);

        $patrolis = $patrolis->orderBy('id', 'DESC')->get();

        return response([
            'data' => $patrolis
        ]);
    }

    public function create(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'tanggal_patroli' => 'required',
            'kategori_patroli_id' => 'required'
        ]);

        $data = $request->all();

        // Insert tabel kegiatan_patroli
        $kegiatanPatroli = new KegiatanPatroli;
        $kegiatanPatroli->tanggal_patroli     = $data['tanggal_patroli'];
        $kegiatanPatroli->kategori_patroli_id = $data['kategori_patroli_id'];
        $kegiatanPatroli->save();

        $this->storeKegiatanPatroliRelation($data, $kegiatanPatroli);
              
        return response([
            'message' => 'Create laporan kegiatan patroli sukses.'
        ]);
    }

    public function remove(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'kegiatan_patroli_id' => 'required'
        ]);

        $payload = $request->all();

        $kegiatanPatroliId = $payload['kegiatan_patroli_id'];

        $kegiatanPatroli = KegiatanPatroli::find($kegiatanPatroliId);

        if ($kegiatanPatroli == NULL) {
            return response([
                'message' => 'Kegiatan patroli dengan ID '.$kegiatanPatroliId.' tidak ditemukan.'
            ]);
        }

        $this->deleteKegiatanPatroliRelation($kegiatanPatroliId);

        // Last delete kegiatan_patroli
        $kegiatanPatroli->delete();

        return response([
            'message' => 'Delete laporan patroli darat sukses.'
        ]);
                        
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kegiatan_patroli_id' => 'required',
            'tanggal_patroli' => 'required'
        ]);

        $data = $request->all();

        $oldKegiatanPatroli = KegiatanPatroli::find($data['kegiatan_patroli_id']);

        if ($oldKegiatanPatroli == NULL) {
            return response([
                'message' => 'Kegiatan patroli dengan ID '.$data['kegiatan_patroli_id'].' tidak ditemukan.'
            ]);
        }

        // Delete kegiatan_patroli relation
        $this->deleteKegiatanPatroliRelation($data['kegiatan_patroli_id']);

        // Re-insert data for kegiatan_patroli relation
        $this->storeKegiatanPatroliRelation($data, $oldKegiatanPatroli);

        // Update tabel kegiatan_patroli
        $oldKegiatanPatroli->tanggal_patroli     = $data['tanggal_patroli'];
        $oldKegiatanPatroli->kategori_patroli_id = $data['kategori_patroli_id'];
        $oldKegiatanPatroli->save();

        return response([
            'message' => 'Update laporan patroli sukses.'
        ]);
    }

    public function unduh_laporan_patroli(Request $request)
    {	
        $this->validate($request, [
            'load' => 'required',
            'tanggal' => 'required',
            'daops' => 'required'
        ]);

        $data = $request->all();

        $load = $data['load'];

        $tanggal = $data['tanggal'];
        $daopsId = $data['daops'];

        // Detail Daops
        $daops = Daops::with([
            'provinsi'
        ])
        ->where('id', $daopsId)
        ->first();

        if ($daops == NULL) {
            return response([
                'message' => 'Daops denga id '.$daopsId.' tidak ditemukan.'
            ]);
        }

        $daops = $daops->toArray();

        // 1. Pelaksana
        $kategoriAnggota = KategoriAnggota::
        with([
            'anggota' => function ($q) use ($daopsId, $tanggal) {
                $q->has('anggotaPatroli'); // Only that has anggotaPatroli
                $q->whereHas('anggotaPatroli', function ($q) use ($daopsId, $tanggal) {
                    $q->whereHas('kegiatanPatroli', function ($q) use ($daopsId, $tanggal) {
                        $q->where('tanggal_patroli', $tanggal); // Filter by tanggal
                        $q->whereHas('patroliDarat', function ($q) use ($daopsId, $tanggal) {
                            $q->whereHas('desaKelurahan', function ($q) use ($daopsId, $tanggal) {
                                $q->whereHas('kecamatan', function ($q) use ($daopsId, $tanggal) {
                                    $q->whereHas('kotaKab', function ($q) use ($daopsId, $tanggal) {
                                        $q->whereHas('daops', function ($q) use ($daopsId, $tanggal) {
                                            $q->where('id', $daopsId); // Filter by daops_id
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            },
            'anggota.anggotaPatroli'
        ])
        ->get()
        ->toArray();

        foreach($kategoriAnggota as $key => $ka) 
        {
            if (count($ka['anggota']) > 0)
            {
                $kategoriAnggota[$key]['count_anggota'] = count($ka['anggota']).' Orang';
                unset($kategoriAnggota[$key]['anggota']);
            }
            else
            {
                unset($kategoriAnggota[$key]);
            }
                
        }

        // 2. Posko patroli terpadu
        // 3. Kondisi Cuaca
        // 4. Kegiatan Patroli
        $kegiatanPatroli = KegiatanPatroli::with([
            // Patroli Darat
            'patroliDarat' => function ($q) use ($daopsId) {
                $q->whereHas('desaKelurahan', function ($q) use ($daopsId) {
                    $q->whereHas('kecamatan', function ($q) use ($daopsId) {
                        $q->whereHas('kotakab', function ($q) use ($daopsId) {
                            $q->whereHas('daops', function ($q) use ($daopsId) {
                                $q->where('id', $daopsId);
                            });
                        });
                    });
                });
            },
            'patroliDarat.kondisiVegetasi.vegetasi',
            'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliDarat.kondisiVegetasi.kategoriKondisiVegetasi',
            'patroliDarat.kondisiTanah.tanah',
            'patroliDarat.kondisiSumberAir.sumberAir',
            'patroliDarat.kadarAirBahanBakar',
            'patroliDarat.cuacaPagi',
            'patroliDarat.cuacaSiang',
            'patroliDarat.cuacaSore',
            'patroliDarat.pemadaman.tipeKebakaran',
            'patroliDarat.pemadaman.pemilikLahan',
            
            'patroliUdara' => function ($q) use ($daopsId) {
                $q->whereHas('desaKelurahan', function ($q) use ($daopsId) {
                    $q->whereHas('kecamatan', function ($q) use ($daopsId) {
                        $q->whereHas('kotakab', function ($q) use ($daopsId) {
                            $q->whereHas('daops', function ($q) use ($daopsId) {
                                $q->where('id', $daopsId);
                            });
                        });
                    });
                });
            },
            'patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliUdara.cuacaPagi',
            'patroliUdara.cuacaSiang',
            'patroliUdara.cuacaSore',

            'anggotaPatroli.anggota.kategoriAnggota'
        ])
        ->where('tanggal_patroli', $tanggal)
        ->get()
        ->toArray();

        $result = [
            'tanggal' => $this->tglIndo($tanggal),
            'daops' => $daops,
            'kategoriAnggota' => $kategoriAnggota,
            'kegiatanPatroli' => $kegiatanPatroli
        ];

        if ($load == 'pdf')
            return app()->make('dompdf.wrapper')->loadView('LaporanPdf', $result)->stream();
        else if ($load == 'json')
            return response($result);
        else
            return view('LaporanPdf', $result);
    }

    public function unduh_rekapitulasi_laporan_patroli(Request $request)
    {
        $this->validate($request, [
            'load' => 'required',
            'tanggal' => 'required',
            'provinsi_id' => 'required'
        ]);

        $data = $request->all();

        $load = $data['load'];

        $tanggal     = $data['tanggal'];
        $provinsi_id = $data['provinsi_id'];

        // Get provinsi detail
        $provinsi = Provinsi::find($provinsi_id);

        if ($provinsi == NULL) {
            return response([
                'message' => 'Provinsi dengan id '.$provinsi_id.' tidak ditemukan'
            ]);
        }

        // Get list daops by provinsi id, only daops
        // that exist in patroli darat
        $daopsList = Daops::with([
            'provinsi'
        ])
        ->whereHas('provinsi', function ($query) use ($provinsi_id) {
            $query->where('provinsi.id', $provinsi_id);
        })
        ->whereHas('kotaKab.kecamatan.desaKelurahan.patroliDarat.kegiatanPatroli', function ($q) use ($tanggal) {
            $q->where('tanggal_patroli', $tanggal);
        })
        ->has('kotaKab.kecamatan.desaKelurahan.patroliDarat')
        ->get();

        $result = [
            'tanggal' => $this->tglIndo($tanggal),
            'provinsi' => $provinsi
        ];

        $resumePerDaopsPerDay = [];
        foreach($daopsList as $daops)
        {
            $resumePerDaopsPerDay[] = $this->laporanPatroliByDaops(array('daops'=>$daops['id'], 'tanggal'=>$tanggal));
        }

        $result['resume_per_daops_perday'] = $resumePerDaopsPerDay;

        if ($load == 'pdf')
            return app()->make('dompdf.wrapper')->loadView('RekapitulasiPatroliPdf', $result)->stream();
        else if ($load == 'json')
            return response($result);
        else
            return view('RekapitulasiPatroliPdf', $result);
    }

    private function laporanPatroliByDaops($filter = array())
    {
        $tanggal = $filter['tanggal'];
        $daopsId = $filter['daops'];

        // Detail Daops
        $daops = Daops::with([
            'provinsi'
        ])
        ->where('id', $daopsId)
        ->first()
        ->toArray();

        // 1. Pelaksana
        $kategoriAnggota = KategoriAnggota::
        with([
            'anggota' => function ($q) use ($daopsId, $tanggal) {
                $q->has('anggotaPatroli'); // Only that has anggotaPatroli
                $q->whereHas('anggotaPatroli', function ($q) use ($daopsId, $tanggal) {
                    $q->whereHas('kegiatanPatroli', function ($q) use ($daopsId, $tanggal) {
                        $q->where('tanggal_patroli', $tanggal); // Filter by tanggal
                        $q->whereHas('patroliDarat', function ($q) use ($daopsId, $tanggal) {
                            $q->whereHas('desaKelurahan', function ($q) use ($daopsId, $tanggal) {
                                $q->whereHas('kecamatan', function ($q) use ($daopsId, $tanggal) {
                                    $q->whereHas('kotaKab', function ($q) use ($daopsId, $tanggal) {
                                        $q->whereHas('daops', function ($q) use ($daopsId, $tanggal) {
                                            $q->where('id', $daopsId); // Filter by daops_id
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            },
            'anggota.anggotaPatroli'
        ])
        ->get()
        ->toArray();

        foreach($kategoriAnggota as $key => $ka) 
        {
            if (count($ka['anggota']) > 0)
            {
                $kategoriAnggota[$key]['count_anggota'] = count($ka['anggota']).' Orang';
                unset($kategoriAnggota[$key]['anggota']);
            }
            else
            {
                unset($kategoriAnggota[$key]);
            }
                
        }

        // 2. Posko patroli terpadu
        // 3. Kondisi Cuaca
        // 4. Kegiatan Patroli
        $kegiatanPatroli = KegiatanPatroli::with([
            // Patroli Darat
            'patroliDarat' => function ($q) use ($daopsId) {
                $q->whereHas('desaKelurahan', function ($q) use ($daopsId) {
                    $q->whereHas('kecamatan', function ($q) use ($daopsId) {
                        $q->whereHas('kotakab', function ($q) use ($daopsId) {
                            $q->whereHas('daops', function ($q) use ($daopsId) {
                                $q->where('id', $daopsId);
                            });
                        });
                    });
                });
            },
            'patroliDarat.kondisiVegetasi.vegetasi',
            'patroliDarat.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliDarat.kondisiVegetasi.kategoriKondisiVegetasi',
            'patroliDarat.kondisiTanah.tanah',
            'patroliDarat.kondisiSumberAir.sumberAir',
            'patroliDarat.kadarAirBahanBakar',
            'patroliDarat.cuacaPagi',
            'patroliDarat.cuacaSiang',
            'patroliDarat.cuacaSore',
            'patroliDarat.pemadaman.tipeKebakaran',
            'patroliDarat.pemadaman.pemilikLahan',
            
            'patroliUdara' => function ($q) use ($daopsId) {
                $q->whereHas('desaKelurahan', function ($q) use ($daopsId) {
                    $q->whereHas('kecamatan', function ($q) use ($daopsId) {
                        $q->whereHas('kotakab', function ($q) use ($daopsId) {
                            $q->whereHas('daops', function ($q) use ($daopsId) {
                                $q->where('id', $daopsId);
                            });
                        });
                    });
                });
            },
            'patroliUdara.desaKelurahan.kecamatan.kotaKab.daops.provinsi',
            'patroliUdara.cuacaPagi',
            'patroliUdara.cuacaSiang',
            'patroliUdara.cuacaSore',

            'anggotaPatroli.anggota.kategoriAnggota'
        ])
        ->where('tanggal_patroli', $tanggal)
        ->get()
        ->toArray();

        $result = [
            'tanggal' => $this->tglIndo($tanggal),
            'daops' => $daops,
            'kategoriAnggota' => $kategoriAnggota,
            'kegiatanPatroli' => $kegiatanPatroli
        ];

        return $result;
    }

    private function tglIndo($tanggal)
    {
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $bulan_segs = explode('-', $tanggal);

        return $bulan_segs[2] . ' '. $bulan[ (int)$bulan_segs[1] ] . ' ' . $bulan_segs[0];
    }

    private function storeKegiatanPatroliRelation($data = array(), $kegiatanPatroli)
    {
        // Data general, baik patroli darat maupun patroli udara mesti create data ini
        // Insert tabel inventori_patroli
        $this->storeInventoriPatroli($data, $kegiatanPatroli->id);
        // Insert tabel hotspot
        $this->storeHotspot($data, $kegiatanPatroli->id);
        // Insert tabel aktivitas_harian_patroli
        $this->storeAktivitasHarianPatroli($data, $kegiatanPatroli->id);
        // Insert tabel dokumentasi
        $this->storeDokumentasiPatroli($data, $kegiatanPatroli->id);
        // Insert tabel anggota_patroli
        $this->storeAnggotaPatroli($data, $kegiatanPatroli->id);

        // Insert tabel patroli_darat
        if (!empty($data['patroli_darat'])) 
        {
            foreach ($data['patroli_darat'] as $patroliDarat)
                $this->storePatroliDarat($patroliDarat, $kegiatanPatroli->id);
            
        }

        // Insert tabel patroli_udara
        if (!empty($data['patroli_udara']))
        {
            foreach($data['patroli_udara'] as $patroliUdara)
                $this->storePatroliUdara($patroliUdara, $kegiatanPatroli->id);
        }
    }

    private function storePatroliUdara($data = array(), $kegiatanPatroliId = NULL)
    {
        $patroliUdara = new PatroliUdara;
        $patroliUdara->kegiatan_patroli_id  = $kegiatanPatroliId;
        foreach($data as $key => $dataVal) { if (!is_array($dataVal)) $patroliUdara->{$key} = $dataVal; }
        $patroliUdara->save();
    }

    private function storePatroliDarat($data = array(), $kegiatanPatroliId)
    {
        $patroliDarat = new PatroliDarat;
        $patroliDarat->kegiatan_patroli_id  = $kegiatanPatroliId;
        foreach ($data as $key => $dataVal) {  if (!is_array($dataVal)) $patroliDarat->{$key} = $dataVal; }
        $patroliDarat->save();

        // Insert ke tabel hasil_uji
        $this->storeHasilUji($data, $patroliDarat->id);
        // Insert ke tabel kondisi_sumber_air
        $this->storeKondisiSumberAir($data, $patroliDarat->id);
        // Insert ke tabel kondisi_vegetasi
        $this->storeKondisiVegetasi($data, $patroliDarat->id);
        // Insert ke kondisi_tanah
        $this->storeKondisiTanah($data, $patroliDarat->id);
        // Insert ke tabel pemadaman
        $this->storePemadaman($data, $patroliDarat->id);
    }

    private function storeInventoriPatroli($data = array(), $kegiatanPatroliId = NULL)
    {
        if (!empty($data['inventori_patroli']))
        {
            foreach($data['inventori_patroli'] as $ip)
            {
                $inventoriPatroli = new InventoriPatroli;
                $inventoriPatroli->kegiatan_patroli_id = $kegiatanPatroliId;
                $inventoriPatroli->inventori_id        = $ip['inventori_id'];
                $inventoriPatroli->jumlah_unit         = $ip['jumlah_unit'];
                $inventoriPatroli->save();
            }
        }
    }

    private function storeDokumentasiPatroli($data = array(), $kegiatanPatroliId = NULL)
    {
        if (!empty($data['images']))
        {
            foreach($data['images'] as $img)
            {
                $pngUrl = "dok-".$kegiatanPatroliId."-".time().".png";
                $path   = base_path('public').'/img/'.$pngUrl;

                Image::make($img['file'])->save($path);

                $dokumentasi = new Dokumentasi;
                $dokumentasi->kegiatan_patroli_id = $kegiatanPatroliId;
                $dokumentasi->url_file = $pngUrl;
                $dokumentasi->tipe_file = 'images/png';
                $dokumentasi->deskripsi = $img['deskripsi'];
                $dokumentasi->save();
            }
        }
    }

    private function storeHotspot($data = array(), $kegiatanPatroliId = NULL)
    {
        if (!empty($data['hotspot']))
        {
            foreach($data['hotspot'] as $hs)
            {
                $hotspot = new Hotspot;
                $hotspot->kegiatan_patroli_id = $kegiatanPatroliId;
                $hotspot->satelit_id          = $hs['satelit_id'];
                $hotspot->deskripsi           = $hs['deskripsi'];
                $hotspot->save();
            }
        }
    }

    private function storeAktivitasHarianPatroli($data = array(), $kegiatanPatroliId = NULL)
    {
        if (!empty($data['aktivitas_harian_patroli']))
        {
            foreach($data['aktivitas_harian_patroli'] as $ahp)
            {
                $aktivitasHarianPatroli = new AktivitasHarianPatroli;
                $aktivitasHarianPatroli->kegiatan_patroli_id = $kegiatanPatroliId;
                $aktivitasHarianPatroli->aktivitas_harian_id = $ahp['aktivitas_harian_id'];
                $aktivitasHarianPatroli->save();
            }
        }
        
    }

    private function storeAnggotaPatroli($data = array(), $kegiatanPatroliId = NULL)
    {
        if (!empty($data['anggota_patroli']))
        {
            foreach($data['anggota_patroli'] as $anggota_patroli)
            {
                $anggotaPatroli = new AnggotaPatroli;
                $anggotaPatroli->anggota_id = $anggota_patroli['anggota_id'];
                $anggotaPatroli->kegiatan_patroli_id = $kegiatanPatroliId;
                $anggotaPatroli->save();
            }
        }
    }

    private function storeKondisiVegetasi($data = array(), $patroliDaratId = NULL)
    {
        if (!empty($data['kondisi_vegetasi']))
        {
            foreach($data['kondisi_vegetasi'] as $kv)
            {
                $kondisiVegetasi = new KondisiVegetasi;
                $kondisiVegetasi->patroli_darat_id = $patroliDaratId;
                foreach ($kv as $key => $kvValue) { $kondisiVegetasi->{$key} = $kvValue; }
                $kondisiVegetasi->save();
            }
        }
    }

    private function storeHasilUji($data = array(), $patroliDaratId = NULL)
    {
        if (!empty($data['hasil_uji']))   
        {
            foreach($data['hasil_uji'] as $hu)
            {
                $hasilUji = new HasilUji;
                $hasilUji->patroli_darat_id = $patroliDaratId;
                $hasilUji->nama_pengujian = $hu['nama_pengujian'];
                $hasilUji->hasil = $hu['hasil'];
                $hasilUji->save();
            }
        }
    }

    private function storeKondisiSumberAir($data = array(), $patroliDaratId = NULL)
    {
        if (!empty($data['kondisi_sumber_air']))
        {
            foreach($data['kondisi_sumber_air'] as $ksa)
            {
                $kondisiSumberAir = new KondisiSumberAir;
                $kondisiSumberAir->patroli_darat_id = $patroliDaratId;
                foreach($ksa as $key => $ksaVal) { $kondisiSumberAir->{$key} = $ksaVal; }
                $kondisiSumberAir->save();
            }
        }
    }

    private function storeKondisiTanah($data = array(), $patroliDaratId = NULL)
    {
        if (!empty($data['kondisi_tanah']))
        {
            foreach($data['kondisi_tanah'] as $kt)
            {
                $kondisiTanah = new KondisiTanah;
                $kondisiTanah->patroli_darat_id = $patroliDaratId;
                foreach($kt as $key => $ktVal) { $kondisiTanah->{$key} = $ktVal; }
                $kondisiTanah->save();
            }
        }
    }

    private function storePemadaman($data = array(), $patroliDaratId = NULL)
    {
        if (!empty($data['pemadaman']))
        {
            foreach($data['pemadaman'] as $pem)
            {
                $pemadaman = new Pemadaman;
                $pemadaman->patroli_darat_id = $patroliDaratId;
                foreach($pem as $key => $pemVal) { $pemadaman->{$key} = $pemVal; }
                $pemadaman->save();
            }
        }
        
    }

    private function deleteKegiatanPatroliRelation($kegiatanPatroliId)
    {
        // Direct relation to kegiatan_patroli
        // Delete aktivitas_harian_patroli
        $aktivitasHarianPatroli = AktivitasHarianPatroli::where('kegiatan_patroli_id', '=', $kegiatanPatroliId);
        $aktivitasHarianPatroli->delete();
        
        // Delete inventori_patroli
        $inventoriPatroli = InventoriPatroli::where('kegiatan_patroli_id', '=', $kegiatanPatroliId);
        $inventoriPatroli->delete();

        // Delete hotspot
        $hotspot = Hotspot::where('kegiatan_patroli_id', '=', $kegiatanPatroliId);
        $hotspot->delete();

        // Delete anggota_patroli
        $anggotaPatroli = AnggotaPatroli::where('kegiatan_patroli_id', '=', $kegiatanPatroliId);
        $anggotaPatroli->delete();

        // Delete dokumentasi
        $dokumentasi = Dokumentasi::where('kegiatan_patroli_id', '=', $kegiatanPatroliId);
        // Unlink image
        foreach($dokumentasi->get() as $dok)
        {
            $imgUrl = base_path('public/img/'.$dok->url_file);
            if (file_exists($imgUrl))
                unlink($imgUrl);
        }
        $dokumentasi->delete();
        

        // Indirect relation via patroli_darat
        $patroliDarats = PatroliDarat::where('kegiatan_patroli_id', '=', $kegiatanPatroliId)->get();
        foreach ($patroliDarats as $patroliDarat)
        {
            // Delete hasil_uji
            $hasilUji = HasilUji::where('patroli_darat_id', '=', $patroliDarat->id);
            $hasilUji->delete();
            
            // Delete kondisi_sumber_air
            $kondisiSumberAir = KondisiSumberAir::where('patroli_darat_id', '=', $patroliDarat->id);
            $kondisiSumberAir->delete();

            // Delete kondisi_tanah
            $kondisiTanah = KondisiTanah::where('patroli_darat_id', '=', $patroliDarat->id);
            $kondisiTanah->delete();

            // Kondisi vegetasi
            $kondisiVegetasi = KondisiVegetasi::where('patroli_darat_id', '=', $patroliDarat->id);
            $kondisiVegetasi->delete();

            // Delete pemadaman
            $pemadaman = Pemadaman::where('patroli_darat_id', '=', $patroliDarat->id);
            $pemadaman->delete();

            // Last delete patroli_darat it selft
            $patroliDarat->delete();
        }

        // Delete patroli_udara
        $patroliUdaras = PatroliUdara::where('kegiatan_patroli_id', '=', $kegiatanPatroliId)->get();
        foreach ($patroliUdaras as $patroliUdara)
        {
            $patroliUdara->delete();
        }
    }
}
