<?php

namespace App\Models;

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

    public function cuacaPagi()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_pagi_id', 'id');
    }

    public function cuacaSiang()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_siang_id', 'id');
    }

    public function cuacaSore()
    {
        return $this->belongsTo('App\Cuaca', 'cuaca_sore_id', 'id');
    }
}
