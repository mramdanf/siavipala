<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    protected $table = 'tanah';
    protected $hidden = ['created_at', 'updated_at'];

    public function kondisiTanah()
    {
        return $this->hasMany('App\KondisiTanah');
    }
}
