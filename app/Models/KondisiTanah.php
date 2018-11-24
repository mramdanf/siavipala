<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KondisiTanah extends Model
{
    protected $table = 'kondisi_tanah';

    public function tanah()
    {
        return $this->belongsTo('App\Models\Tanah');
    }

    public function potensiKarhutla()
    {
        return $this->belongsTo('App\Models\PotensiKarhutla');
    }

    public function kondisiKarhutla()
    {
        return $this->belongsTo('App\Models\KondisiKarhutla');
    }
}
