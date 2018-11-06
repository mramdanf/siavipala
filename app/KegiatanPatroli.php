<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPatroli extends Model
{
    protected $table = 'kegiatan_patroli';
    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDarat()
    {
        return $this->hasMany('App\PatroliDarat');
    }

    public function patroliUdara()
    {
        return $this->hasMany('App\PatroliUdara');
    }

    public function dokumentasi()
    {
        return $this->hasMany('App\Dokumentasi');
    }

    public function inventoriPatroli()
    {
        return $this->hasMany('App\InventoriPatroli');
    }

    public function kategoriPatroli()
    {
        return $this->belongsTo('App\KategoriPatroli');
    }

    public function hotspot()
    {
        return $this->hasMany('App\Hotspot');
    }

    public function aktivitasHarianPatroli()
    {
        return $this->hasMany('App\AktivitasHarianPatroli');
    }

    public function anggotaPatroli()
    {
        return $this->hasMany('App\AnggotaPatroli');
    }
    
}
