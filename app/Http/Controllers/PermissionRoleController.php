<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;

class PermissionRoleController extends Controller
{
    public function list()
    {
        $roles = Role::with([
            'permissionRole.permission'
        ])
        ->get();

        return response([
            'roles' => $roles
        ]);
    }

    public function assignPermissionToRole(Request $req)
    {
        $this->validate($req, [
            'permission_id' => 'required',
            'role_id' => 'required'
        ]);

        // Check permission exist
        $permission = Permission::where('id', $req->input('permission_id'))->first();
        if (!$permission)
        {
            return response()
                ->json(
                    array('message'=>'No permission found'), 404);
        }

        // Check role exist
        $role = Role::where('id', $req->input('role_id'))->first();
        if (!$role)
        {
            return response()
                ->json(
                    array('message'=>'No role found.'), 404);
        }

        // Check if role already has permission
        if ($role->hasPermission($permission->name))
        {
            return response()
                ->json(
                    array('message'=>'Role '.$role->name.' already has '.$permission->name), 400);
        }

        // Attach permission to role
        $role->attachPermission($permission);
        if ($role->hasPermission($permission->name))
        {
            $role = Role::with([
                'permissionRole.permission'
            ])
            ->where('id', $req->input('role_id'))
            ->first();

            return response([
                'message' => 'Attach permission to role success',
                'role' => $role
            ]);
        }

    }

    public function unassignPermissionFromRole(Request $req)
    {
        $this->validate($req, [
            'permission_id' => 'required',
            'role_id' => 'required'
        ]);

        // Check permission exist
        $permission = Permission::where('id', $req->input('permission_id'))->first();
        if (!$permission)
        {
            return response()
                ->json(
                    array('message'=>'No permission found'), 404);
        }

        // Check role exist
        $role = Role::where('id', $req->input('role_id'))->first();
        if (!$role)
        {
            return response()
                ->json(
                    array('message'=>'No role found.'), 404);
        }

        // Check if role already has permission
        if (!$role->hasPermission($permission->name))
        {
            return response()
                ->json(
                    array('message'=>'Role '.$role->name.' dosent has permission '.$permission->name), 400);
        }

        // Unattach permission from role
        $permissionRole = PermissionRole::where('permission_id', $req->input('permission_id'))
                                        ->where('role_id', $req->input('role_id'));
        $permissionRole->delete();

        if (!$role->hasPermission($permission->name))
        {
            $role = Role::with([
                'permissionRole.permission'
            ])
            ->where('id', $req->input('role_id'))
            ->first();

            return response([
                'message' => 'Unassign permission from role success',
                'role' => $role
            ]);
        }

    }
}
