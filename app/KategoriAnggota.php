<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriAnggota extends Model
{
    protected $table = 'kategori_anggota';
    protected $hidden = ['created_at', 'updated_at'];

    public function anggota()
    {
        return $this->hasMany('App\Anggota');
    }
}
