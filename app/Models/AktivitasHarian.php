<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasHarian extends Model
{
    protected $table = 'aktivitas_harian';
    
    protected $hidden = ['created_at', 'updated_at'];
}
