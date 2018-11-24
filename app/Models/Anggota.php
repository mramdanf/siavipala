<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $hidden = ['created_at', 'updated_at'];


    public function kategoriAnggota()
    {
        return $this->belongsTo('App\KategoriAnggota');
    }

    public function anggotaPatroli()
    {
        return $this->hasMany('App\AnggotaPatroli');
    }
}
