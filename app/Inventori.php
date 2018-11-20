<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    protected $table = 'inventori';
    protected $hidden = ['created_at', 'updated_at'];
}
