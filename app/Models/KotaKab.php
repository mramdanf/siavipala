<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KotaKab extends Model
{
    protected $table = 'kota_kab';
    protected $hidden = ['created_at', 'updated_at'];

    public function kecamatan()
    {
        return $this->hasMany('App\Kecamatan');
    }

    public function daops()
    {
        return $this->belongsTo('App\Daops');
    }
}
