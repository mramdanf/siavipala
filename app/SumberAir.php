<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberAir extends Model
{
    protected $table = 'sumber_air';

    public function kondisiSumberAir()
    {
        return $this->hasMany('App\KondisiSumberAir');
    }
}
