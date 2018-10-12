<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaPatroli extends Model
{
    protected $table = 'anggota_patroli';

    public function anggota()
    {
        return $this->belongsTo('App\Anggota');
    }
}
