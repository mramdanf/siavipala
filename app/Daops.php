<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daops extends Model
{
    protected $table = 'daops';

    public function kotaKab()
    {
        return $this->hasMany('App\KotaKab');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Provinsi');
    }
}
