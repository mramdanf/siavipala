<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiSumberAir extends Model
{
    protected $table = 'kondisi_sumber_air';
    protected $hidden = ['created_at', 'updated_at'];

    public function sumberAir()
    {
        return $this->belongsTo('App\Models\SumberAir');
    }
}
