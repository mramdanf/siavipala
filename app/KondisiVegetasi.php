<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiVegetasi extends Model
{
    protected $table = 'kondisi_vegetasi';

    public function vegetasi()
    {
        return $this->belongsTo('App\Vegetasi');
    }

    public function kategoriKondisiVegetasi()
    {
        return $this->belongsTo('App\KategoriKondisiVegetasi');
    }

    public function potensiKarhutla()
    {
        return $this->belongsTo('App\PotensiKarhutla');
    }

    public function kondisiKarhutla()
    {
        return $this->belongsTo('App\KondisiKarhutla');
    }
}
