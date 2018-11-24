<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiSumberAir extends Model
{
    protected $table = 'kondisi_sumber_air';

    public function sumberAir()
    {
        return $this->belongsTo('App\SumberAir');
    }
}
