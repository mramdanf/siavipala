<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = 'dokumentasi';
    protected $hidden = ['created_at', 'updated_at'];

    public function kegiatanPatroli()
    {
        return $this->belongsTo('App\KegiatanPatroli');
    }
}
