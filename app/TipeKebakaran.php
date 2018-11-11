<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeKebakaran extends Model
{
    protected $table = 'tipe_kebakaran';
    protected $hidden = ['created_at', 'updated_at'];
}
