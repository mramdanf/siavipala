<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtifisialParam extends Model
{
    protected $table = 'artifisial_param';

    protected $hidden = ['created_at', 'updated_at'];
}
