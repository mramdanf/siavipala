<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    public function daops()
    {
        return $this->hasMany('App\Daops');
    }
}
