<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaPatroli extends Model
{
    protected $table = 'anggota_patroli';
    protected $hidden = ['created_at', 'updated_at'];

    public function anggota()
    {
        return $this->belongsTo('App\Anggota');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\KegiatanPatroli');
    }
}
