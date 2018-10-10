<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemadaman extends Model
{
    protected $table = 'pemadaman';

    public function patroliDarat()
    {
        return $this->belongsTo('App\PatroliDarat');
    }
}
