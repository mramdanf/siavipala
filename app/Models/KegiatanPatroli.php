<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanPatroli extends Model
{
    protected $table = 'kegiatan_patroli';
    protected $hidden = ['created_at', 'updated_at', 'kategori_patroli_id'];

    public function lokasiPatroli() {
        return $this->hasMany('App\Models\LokasiPatroli');
    }

    public function dokumentasi()
    {
        return $this->hasMany('App\Models\Dokumentasi');
    }

    public function inventoriPatroli()
    {
        return $this->hasMany('App\Models\InventoriPatroli');
    }

    public function kategoriPatroli()
    {
        return $this->belongsTo('App\Models\KategoriPatroli');
    }

    public function hotspot()
    {
        return $this->hasMany('App\Models\Hotspot');
    }

    public function aktivitasHarianPatroli()
    {
        return $this->hasMany('App\Models\AktivitasHarianPatroli');
    }

    public function anggotaPatroli()
    {
        return $this->hasMany('App\Models\AnggotaPatroli');
    }
    
}
