<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    protected $table = 'hak_akses';
    protected $hidden = ['created_at', 'updated_at'];

    public function levelPengguna()
    {
        return $this->hasMany('App\LevelPengguna');
    }
}
