<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesaKelurahan extends Model
{
    protected $table = 'desa_kelurahan';

    public function kegiatanPatroli()
    {
        return $this->hasMany('App\KegiatanPatroli');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan');
    }
}
