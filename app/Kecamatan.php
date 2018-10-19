<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $hidden = ['created_at', 'updated_at'];

    public function desaKelurahan()
    {
        return $this->hasMany('App\DesaKelurahan');
    }

    public function kotaKab()
    {
        return $this->belongsTo('App\KotaKab');
    }

    public function posko()
    {
        return $this->hasMany('App\Posko');
    }
}
