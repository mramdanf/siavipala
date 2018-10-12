<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    protected $table = 'tanah';

    public function kondisiTanah()
    {
        return $this->hasMany('App\KondisiTanah');
    }
}
