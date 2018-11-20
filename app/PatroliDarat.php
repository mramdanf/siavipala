<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatroliDarat extends Model
{
    protected $table = 'patroli_darat';
    protected $hidden = [
        'created_at', 
        'updated_at',

        // Hide relation id
        'kegiatan_patroli_id',
        'desa_kelurahan_id',
        'cuaca_pagi_id',
        'cuaca_siang_id',
        'cuaca_sore_id',
        "fwi_id",
        "ffmc_kkas_id",
        "dc_kk_id",
        'kadar_air_bahan_bakar_id'
    ];

    public function desaKelurahan()
    {
        return $this->belongsTo('App\DesaKelurahan');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\KegiatanPatroli');
    }

    public function pemadaman()
    {
        return $this->hasMany('App\Pemadaman');
    }

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\KondisiVegetasi');
    }

    public function kondisiSumberAir()
    {
        return $this->hasMany('App\KondisiSumberAir');
    }

    public function kondisiTanah()
    {
        return $this->hasMany('App\KondisiTanah');
    }

    public function curahHujan()
    {
        return $this->belongsTo('App\CurahHujan');
    }

    public function cuacaPagi()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_pagi_id', 'id');
    }

    public function cuacaSiang()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_siang_id', 'id');
    }

    public function cuacaSore()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_sore_id', 'id');
    }

    public function fwi()
    {
        return $this->belongsTo('App\ArtifisialParam', 'fwi_id', 'id');
    }

    public function ffmcKkas()
    {
        return $this->belongsTo('App\ArtifisialParam', 'ffmc_kkas_id', 'id');
    }

    public function dcKk()
    {
        return $this->belongsTo('App\ArtifisialParam', 'dc_kk_id', 'id');
    }

    public function kadarAirBahanBakar()
    {
        return $this->belongsTo('App\KadarAirBahanBakar');
    }

    public function potensiKarhutla()
    {
        return $this->belongsTo('App\PotensiKarhutla');
    }

    public function kondisiKarhutla()
    {
        return $this->belongsTo('App\KondisiKarhutla');
    }

    public function keteranganLokasi()
    {
        return $this->belongsTo('App\KeteranganLokasi');
    }
}
