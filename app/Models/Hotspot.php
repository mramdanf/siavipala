<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotspot extends Model
{
    protected $table = 'hotspot';
    protected $hidden = ['created_at', 'updated_at'];

    public function satelit()
    {
        return $this->belongsTo('App\Models\Satelit');
    }
}
