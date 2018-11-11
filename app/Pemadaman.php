<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemadaman extends Model
{
    protected $table = 'pemadaman';
    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDarat()
    {
        return $this->belongsTo('App\PatroliDarat');
    }

    public function tipeKebakaran()
    {
        return $this->belongsTo('App\TipeKebakaran');
    }

    public function pemilikLahan()
    {
        return $this->belongsTo('App\PemilikLahan');
    }
}
