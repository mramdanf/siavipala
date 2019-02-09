<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiPatroli extends Model
{
    protected $table = 'lokasi_patroli';
    protected $hidden = ['created_at','updated_at'];

    public function patroliDarat() {
        return $this->hasOne('App\Models\PatroliDarat');
    }

    public function patroliUdara() {
        return $this->hasOne('App\Models\PatroliUdara');
    }

    public function kegiatanPatroli() {
        return $this->belongsTo('App\Models\KegiatanPatroli');
    }
}
