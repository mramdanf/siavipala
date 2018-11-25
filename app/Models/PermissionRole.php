<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $table = 'permission_role';
    protected $hidden = ['created_at', 'updated_at'];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function permission()
    {
        return $this->belongsTo('App\Models\Permission');
    }
}
