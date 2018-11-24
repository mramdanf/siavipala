<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotspotSipongi extends Model
{
    protected $table = 'hotspot_sipongi';
    protected $hidden = ['created_at', 'updated_at'];

    public function sebaranHotspot()
    {
        return $this->hasMany('App\SebaranHotspot');
    }
}
