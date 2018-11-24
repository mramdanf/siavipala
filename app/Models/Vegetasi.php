<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vegetasi extends Model
{
    protected $table = 'vegetasi';
    protected $hidden = ['created_at', 'updated_at'];

    public function kondisiVegetasi()
    {
        return $this->hasMany('App\Models\KondisiVegetasi');
    }
}
