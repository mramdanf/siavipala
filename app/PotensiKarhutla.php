<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiKarhutla extends Model
{
    protected $table = 'potensi_karhutla';
    protected $hidden = ['created_at', 'updated_at'];

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\KondisiVegetasi');
    }
}
