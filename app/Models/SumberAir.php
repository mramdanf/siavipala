<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SumberAir extends Model
{
    protected $table = 'sumber_air';

    protected $hidden = ['created_at', 'updated_at'];

    public function kondisiSumberAir()
    {
        return $this->hasMany('App\KondisiSumberAir');
    }
}
