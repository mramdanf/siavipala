<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelPengguna extends Model
{
    protected $table = 'level_pengguna';
    protected $hidden = ['created_at', 'updated_at'];

    public function hakAkses()
    {
        return $this->belongsTo('App\Models\HakAkses');
    }
}
