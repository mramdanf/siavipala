<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $hidden = ['created_at', 'updated_at'];

	public function roleUser()
	{
		return $this->hasMany('App\Models\RoleUser');
	}

	public function permissionRole()
	{
		return $this->hasMany('App\Models\PermissionRole');
	}
}
