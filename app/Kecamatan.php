<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public function desaKelurahan()
    {
        return $this->hasMany('App\DesaKelurahan');
    }

    public function kotaKab()
    {
        return $this->belongsTo('App\KotaKab');
    }
}
