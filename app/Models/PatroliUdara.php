<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatroliUdara extends Model
{
    protected $table = 'patroli_udara';
    protected $hidden = [
        'created_at', 
        'updated_at', 
        'desa_kelurahan_id',
        'cuaca_siang_id',
        'cuaca_pagi_id',
        'cuaca_sore_id',
        'ffmc_kkas_id',
        'dc_kk_id',
        'fwi_id'
    ];

    public function desaKelurahan()
    {
        return $this->belongsTo('App\Models\DesaKelurahan');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\Models\KegiatanPatroli');
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

    public function curahHujan()
    {
        return $this->belongsTo('App\Models\CurahHujan');
    }
}
