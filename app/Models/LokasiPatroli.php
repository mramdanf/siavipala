<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiPatroli extends Model
{
    protected $table = 'lokasi_patroli';
    protected $hidden = ['created_at','updated_at'];

    public function patroliDarat() {
        return $this->hasOne('App\Models\PatroliDarat');
    }

    public function patroliUdara() {
        return $this->hasOne('App\Models\PatroliUdara');
    }

    public function kegiatanPatroli() {
        return $this->belongsTo('App\Models\KegiatanPatroli');
    }

    public function desaKelurahan() {
        return $this->belongsTo('App\Models\DesaKelurahan');
    }

    public function curahHujan()
    {
        return $this->belongsTo('App\Models\CurahHujan');
    }

    public function cuacaPagi()
    {
        return $this->belongsTo('App\Models\Cuaca', 'cuaca_pagi_id', 'id');
    }

    public function cuacaSiang()
    {
        return $this->belongsTo('App\Models\Cuaca', 'cuaca_siang_id', 'id');
    }

    public function cuacaSore()
    {
        return $this->belongsTo('App\Models\Cuaca', 'cuaca_sore_id', 'id');
    }

    public function fwi()
    {
        return $this->belongsTo('App\Models\ArtifisialParam', 'fwi_id', 'id');
    }

    public function ffmcKkas()
    {
        return $this->belongsTo('App\Models\ArtifisialParam', 'ffmc_kkas_id', 'id');
    }

    public function dcKk()
    {
        return $this->belongsTo('App\Models\ArtifisialParam', 'dc_kk_id', 'id');
    }
}
