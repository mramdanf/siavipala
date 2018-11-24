<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriKondisiVegetasi extends Model
{
    protected $table = 'kategori_kondisi_vegetasi';
    protected $hidden = ['created_at', 'updated_at'];

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\KondisiVegetasi');
    }
}
