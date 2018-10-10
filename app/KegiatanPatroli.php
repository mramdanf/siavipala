<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPatroli extends Model
{
    protected $table = 'kegiatan_patroli';

    public function patroliDarat()
    {
        return $this->hasMany('App\PatroliDarat');
    }

    public function patroliUdara()
    {
        return $this->hasMany('App\PatroliUdara');
    }
}
