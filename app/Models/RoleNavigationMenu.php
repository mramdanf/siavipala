<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleNavigationMenu extends Model
{
    protected $table = 'role_navigation_menu';
    protected $hidden = ['created_at', 'updated_at'];

    public function navigationMenu()
    {
        return $this->belongsTo('App\Models\NavigationMenu');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
