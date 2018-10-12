<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriKondisiVegetasi extends Model
{
    protected $table = 'kategori_kondisi_vegetasi';

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\KondisiVegetasi');
    }
}
