<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    protected $table = 'posko';
    protected $hidden = ['created_at', 'updated_at'];

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan');
    }

    public function desaKelurahan()
    {
        return $this->hasMany('App\DesaKelurahan');
    }
}
