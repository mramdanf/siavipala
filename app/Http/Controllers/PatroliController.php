<?php

namespace App\Http\Controllers;

use App\KegiatanPatroli;
use App\PatroliDarat;
use App\InventoriPatroli;
use App\Hotspot;
use App\AktivitasiHarianPatroli;
use App\KondisiVegetasi;
use App\HasilUji;
use App\KondisiSumberAir;
use App\KondisiTanah;
use App\Pemadaman;
use App\PatroliUdara;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;

class PatroliController extends Controller
{
    public function list()
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
        

        // Insert tabel patroli_darat
        if ($data['jenis_patroli'] == 'DARAT') 
        {
            $this->storePatroliDarat($data, $kegiatanPatroli->id);
        }

        // Insert tabel patroli_udara
        else if ($data['jenis_patroli'] == 'UDARA')
        {
            $this->storePatroliUdara($data, $kegiatanPatroli->id);
        }

        // Insert tabel inventori_patroli
        $this->storeInventoriPatroli($data, $kegiatanPatroli->id);
        // Insert tabel hotspot
        $this->storeHotspot($data, $kegiatanPatroli->id);
        // Insert tabel aktivitas_harian_patroli
        $this->storeAktivitasHarianPatroli($data, $kegiatanPatroli->id);

        return response([
            'message' => 'Create laporan kegiatan patroli sukses.'
        ]);
    }

    private function storePatroliUdara($data = array(), $kegiatanPatroliId = NULL)
    {
        $patroliUdara = new PatroliUdara;
        $patroliUdara->kegiatan_patroli_id  = $kegiatanPatroliId;
        $patroliUdara->desa_kelurahan_id    = $data['desa_kelurahan_id'];
        $patroliUdara->cuaca_pagi_id        = $data['cuaca_pagi_id'];
        $patroliUdara->cuaca_siang_id       = $data['cuaca_siang_id'];
        $patroliUdara->cuaca_sore_id        = $data['cuaca_sore_id'];
        $patroliUdara->curah_hujan_id       = $data['curah_hujan_id'];
        $patroliUdara->curah_hujan_id       = $data['curah_hujan_id'];
        $patroliUdara->suhu                 = $data['suhu'];
        $patroliUdara->kelembapan           = $data['kelembapan'];
        $patroliUdara->kecepatan_angin      = $data['kecepatan_angin'];
        $patroliUdara->ffmc_kkas_id         = $data['ffmc_kkas_id'];
        $patroliUdara->fwi_id               = $data['fwi_id'];
        $patroliUdara->dc_kk_id             = $data['dc_kk_id'];

        $patroliUdara->latitude = $data['latitude'];
        $patroliUdara->longitude = $data['longitude'];
        $patroliUdara->confidence = $data['confidence'];
        $patroliUdara->distance = $data['distance'];
        $patroliUdara->radial = $data['radial'];
        $patroliUdara->kegiatan = $data['kegiatan'];
        $patroliUdara->keterangan = $data['keterangan'];

        $patroliUdara->save();
    }

    private function storePatroliDarat($data = array(), $kegiatanPatroliId)
    {
        $patroliDarat = new PatroliDarat;
        $patroliDarat->kegiatan_patroli_id  = $kegiatanPatroliId;
        $patroliDarat->desa_kelurahan_id    = $data['desa_kelurahan_id'];
        $patroliDarat->cuaca_pagi_id        = $data['cuaca_pagi_id'];
        $patroliDarat->cuaca_siang_id       = $data['cuaca_siang_id'];
        $patroliDarat->cuaca_sore_id        = $data['cuaca_sore_id'];
        $patroliDarat->curah_hujan_id       = $data['curah_hujan_id'];
        $patroliDarat->curah_hujan_id       = $data['curah_hujan_id'];
        $patroliDarat->suhu                 = $data['suhu'];
        $patroliDarat->kelembapan           = $data['kelembapan'];
        $patroliDarat->kecepatan_angin      = $data['kecepatan_angin'];
        $patroliDarat->ffmc_kkas_id         = $data['ffmc_kkas_id'];
        $patroliDarat->fwi_id               = $data['fwi_id'];
        $patroliDarat->dc_kk_id             = $data['dc_kk_id'];
        $patroliDarat->aktivitas_masyarakat = $data['aktivitas_masyarakat'];
        $patroliDarat->keterangan_lokasi    = $data['keterangan_lokasi'];
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
        foreach($data['inventori_patroli'] as $ip)
        {
            $inventoriPatroli = new InventoriPatroli;
            $inventoriPatroli->kegiatan_patroli_id = $kegiatanPatroliId;
            $inventoriPatroli->inventori_id        = $ip['inventori_id'];
            $inventoriPatroli->save();
        }
    }

    private function storeHotspot($data = array(), $kegiatanPatroliId = NULL)
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

    private function storeAktivitasHarianPatroli($data = array(), $kegiatanPatroliId = NULL)
    {
        foreach($data['aktivitas_harian_patroli'] as $ahp)
        {
            $aktivitasHarianPatroli = new AktivitasiHarianPatroli;
            $aktivitasHarianPatroli->kegiatan_patroli_id = $kegiatanPatroliId;
            $aktivitasHarianPatroli->aktivitas_harian_id = $ahp['aktivitas_harian_id'];
            $aktivitasHarianPatroli->save();
        }
    }

    private function storeKondisiVegetasi($data = array(), $patroliDaratId = NULL)
    {
        foreach($data['kondisi_vegetasi'] as $kv)
        {
            $kondisiVegetasi = new KondisiVegetasi;
            $kondisiVegetasi->patroli_darat_id = $patroliDaratId;
            $kondisiVegetasi->vegetasi_id      = $kv['vegetasi_id'];
            $kondisiVegetasi->kategori_kondisi_vegetasi_id = $kv['kategori_kondisi_vegetasi_id'];
            $kondisiVegetasi->potensi_karhutla_id = $kv['potensi_karhutla_id'];
            $kondisiVegetasi->kondisi_karhutla_id = $kv['kondisi_karhutla_id'];
            $kondisiVegetasi->luas_tanah = $kv['luas_tanah'];
            $kondisiVegetasi->longitude = $kv['longitude'];
            $kondisiVegetasi->latitude = $kv['latitude'];
            $kondisiVegetasi->save();
        }
    }

    private function storeHasilUji($data = array(), $patroliDaratId = NULL)
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

    private function storeKondisiSumberAir($data = array(), $patroliDaratId = NULL)
    {
        foreach($data['kondisi_sumber_air'] as $ksa)
        {
            $kondisiSumberAir = new KondisiSumberAir;
            $kondisiSumberAir->patroli_darat_id = $patroliDaratId;
            $kondisiSumberAir->sumber_air_id = $ksa['sumber_air_id'];
            $kondisiSumberAir->longitude = $ksa['longitude'];
            $kondisiSumberAir->latitude = $ksa['latitude'];
            $kondisiSumberAir->panjang = $ksa['panjang'];
            $kondisiSumberAir->lebar = $ksa['lebar'];
            $kondisiSumberAir->kedalaman = $ksa['kedalaman'];
            $kondisiSumberAir->save();
        }
    }

    private function storeKondisiTanah($data = array(), $patroliDaratId = NULL)
    {
        foreach($data['kondisi_tanah'] as $kt)
        {
            $kondisiTanah = new KondisiTanah;
            $kondisiTanah->patroli_darat_id = $patroliDaratId;
            $kondisiTanah->tanah_id = $kt['tanah_id'];
            $kondisiTanah->potensi_karhutla_id = $kt['potensi_karhutla_id'];
            $kondisiTanah->kondisi_karhutla_id = $kt['kondisi_karhutla_id'];
            $kondisiTanah->longitude = $kt['longitude'];
            $kondisiTanah->latitude = $kt['latitude'];
            $kondisiTanah->kedalaman_gambut = $kt['kedalaman_gambut'];
            $kondisiTanah->save();
        }
    }

    private function storePemadaman($data = array(), $patroliDaratId = NULL)
    {
        foreach($data['pemadaman'] as $pem)
        {
            $pemadaman = new Pemadaman;
            $pemadaman->patroli_darat_id = $patroliDaratId;
            $pemadaman->longitude = $pem['longitude'];
            $pemadaman->latitude = $pem['latitude'];
            $pemadaman->luas_terbakar = $pem['luas_terbakar'];
            $pemadaman->save();
        }
    }
}
