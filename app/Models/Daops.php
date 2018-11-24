<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daops extends Model
{
    protected $table = 'daops';
    protected $hidden = ['created_at', 'updated_at'];

    public function kotaKab()
    {
        return $this->hasMany('App\Models\KotaKab');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }
}
