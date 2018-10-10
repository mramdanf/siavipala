<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KotaKab extends Model
{
    protected $table = 'kota_kab';

    public function kecamatan()
    {
        return $this->hasMany('App\Kecamatan');
    }

    public function daops()
    {
        return $this->belongsTo('App\Daops');
    }
}
