<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AktivitasHarianPatroli extends Model
{
    protected $table = 'aktivitas_harian_patroli';

    public function aktivitasHarian()
    {
        return $this->belongsTo('App\AktivitasHarian');
    }
}
