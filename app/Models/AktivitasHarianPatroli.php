<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasHarianPatroli extends Model
{
    protected $table = 'aktivitas_harian_patroli';
    protected $hidden = ['created_at', 'updated_at'];

    public function aktivitasHarian()
    {
        return $this->belongsTo('App\Models\AktivitasHarian');
    }

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\Models\KegiatanPatroli');
    }
}
