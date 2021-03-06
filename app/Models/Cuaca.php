<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuaca extends Model
{
    protected $table = 'cuaca';

    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDaratCuacaPagi()
    {
        return $this->hasMany('App\Models\PatroliDarat', 'id', 'cuaca_pagi_id');
    }

    public function patroliDaratCuacaSiang()
    {
        return $this->hasMany('App\Models\PatroliDarat', 'id', 'cuaca_siang_id');
    }

    public function patroliDaratCuacaSore()
    {
        return $this->hasMany('App\Models\PatroliDarat', 'id', 'cuaca_sore_id');
    }
}
