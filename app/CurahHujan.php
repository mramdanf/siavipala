<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurahHujan extends Model
{
    protected $table = 'curah_hujan';

    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDarat()
    {
        return $this->hasMany('App\PatroliDarat');
    }
}
