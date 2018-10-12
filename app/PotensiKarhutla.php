<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiKarhutla extends Model
{
    protected $table = 'potensi_karhutla';

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\KondisiVegetasi');
    }
}
