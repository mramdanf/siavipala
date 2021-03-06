<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoriPatroli extends Model
{
    protected $table = 'inventori_patroli';
    protected $hidden = ['created_at', 'updated_at'];

    public function inventori()
    {
        return $this->belongsTo('App\Models\Inventori');
    }
}
