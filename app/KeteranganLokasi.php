<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeteranganLokasi extends Model
{
    protected $table = 'keterangan_lokasi';
    protected $hidden = ['created_at', 'updated_at'];


    public function patroliDarat()
    {
        return $this->hasMany('App\PatroliDarat');
    }
}
