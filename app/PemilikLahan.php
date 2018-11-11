<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikLahan extends Model
{
    protected $table = 'pemilik_lahan';
    protected $hidden = ['created_at', 'updated_at'];
}
