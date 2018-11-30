<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiVegetasi extends Model
{
    protected $table = 'kondisi_vegetasi';
    protected $hiden = ['crated_at', 'updated_at'];

    public function vegetasi()
    {
        return $this->belongsTo('App\Models\Vegetasi');
    }

    public function kategoriKondisiVegetasi()
    {
        return $this->belongsTo('App\Models\KategoriKondisiVegetasi');
    }

    // public function potensiKarhutla()
    // {
    //     return $this->belongsTo('App\Models\PotensiKarhutla');
    // }

    // public function kondisiKarhutla()
    // {
    //     return $this->belongsTo('App\Models\KondisiKarhutla');
    // }
}
