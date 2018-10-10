<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatroliUdara extends Model
{
    protected $table = 'patroli_udara';

    public function desaKelurahan()
    {
        return $this->belongsTo('App\DesaKelurahan');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\KegiatanPatroli');
    }
}
