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
}
