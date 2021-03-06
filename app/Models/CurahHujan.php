<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurahHujan extends Model
{
    protected $table = 'curah_hujan';

    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDarat()
    {
        return $this->hasMany('App\Models\PatroliDarat');
    }
}
