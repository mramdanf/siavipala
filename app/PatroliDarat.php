<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatroliDarat extends Model
{
    protected $table = 'patroli_darat';

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
}
