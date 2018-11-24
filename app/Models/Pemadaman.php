<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemadaman extends Model
{
    protected $table = 'pemadaman';
    protected $hidden = ['created_at', 'updated_at'];

    public function patroliDarat()
    {
        return $this->belongsTo('App\Models\PatroliDarat');
    }

    public function tipeKebakaran()
    {
        return $this->belongsTo('App\Models\TipeKebakaran');
    }

    public function pemilikLahan()
    {
        return $this->belongsTo('App\Models\PemilikLahan');
    }
}
