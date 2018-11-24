<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SebaranHotspot extends Model
{
    protected $table = 'sebaran_hotspot';
    protected $hidden = ['created_at', 'updated_at'];

    public function hostspotSipongi()
    {
        return $this->belongsTo('App\Models\HostspotSipongi');
    }
}
