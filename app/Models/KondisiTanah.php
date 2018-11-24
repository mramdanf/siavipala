<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiTanah extends Model
{
    protected $table = 'kondisi_tanah';

    public function tanah()
    {
        return $this->belongsTo('App\Tanah');
    }

    public function potensiKarhutla()
    {
        return $this->belongsTo('App\PotensiKarhutla');
    }

    public function kondisiKarhutla()
    {
        return $this->belongsTo('App\KondisiKarhutla');
    }
}
