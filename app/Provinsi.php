<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $hidden = ['created_at', 'updated_at'];

    public function daops()
    {
        return $this->hasMany('App\Daops');
    }
}
