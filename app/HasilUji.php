<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilUji extends Model
{
    protected $table = 'hasil_uji';
    protected $hidden = ['created_at', 'updated_at'];
}
