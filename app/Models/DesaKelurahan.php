<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesaKelurahan extends Model
{
    protected $table = 'desa_kelurahan';
    protected $hidden = ['created_at', 'updated_at'];

    public function kegiatanPatroli()
    {
        return $this->hasMany('App\Models\KegiatanPatroli');
    }

    public function patroliDarat()
    {
        return $this->hasMany('App\Models\PatroliDarat');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }
}
