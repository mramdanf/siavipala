<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasHarianPatroli extends Model
{
    protected $table = 'aktivitas_harian_patroli';

    public function aktivitasHarian()
    {
        return $this->belongsTo('App\Models\AktivitasHarian');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\Models\KegiatanPatroli');
    }
}
