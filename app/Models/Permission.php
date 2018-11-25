<?php

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	protected $hidden = ['created_at', 'updated_at'];

	public function permissionRole()
	{
		return $this->hasMany('App\Models\PermissionRole');
	}
}
