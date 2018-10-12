<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotspot extends Model
{
    protected $table = 'hotspot';

    public function satelit()
    {
        return $this->belongsTo('App\Satelit');
    }
}
