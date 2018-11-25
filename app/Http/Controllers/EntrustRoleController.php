<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\Pengguna;
use App\Models\Permission;

class EntrustRoleController extends Controller
{
    public function createRole(Request $request)
    {

        $data = $request->all();

        $owner = new Role();
        $owner->name         = $data['name'];
        $owner->display_name = $data['display_name']; // optional
        $owner->description  = $data['description']; // optional
        $owner->save();

        return response([
            'data' => 'Create role success'
        ]);
    }

    public function createPermission(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required'
        ]);

        $data = $request->all();

        $newPermisson = new Permission();
        $newPermisson->name         = $data['name'];
        $newPermisson->display_name = $data['display_name'];
        $newPermisson->save();

        $createdPermission = Permission::find($newPermisson->id)->first();

        return response([
            'message' => 'Create permisson success.',
            'newPermission' => $createdPermission
        ]);
    }

    public function assignRole(Request $request) 
    {

        $data = $request->all();

        $adminRole = Role::find($data['role_id'])->first();
        $pengguna  = Pengguna::find($data['pengguna_id'])->first();

        $pengguna->attachRole($adminRole);

        return response([
            'data' => 'Assign role success'
        ]);
    }

    public function attachPermission(Request $request)
    {
        $this->validate($request, [
            'role_id' => 'required',
            'permission_id' => 'required'
        ]);

        $data = $request->all();

        $role = Role::find($data['role_id']);

        $permission = Permission::find($data['permission_id']);

        $role->attachPermission($permission);

        $roleAttached = Role::with('permissions')->get();

        return response([
            'message' => 'Attach permission success',
            'role' => $roleAttached
        ]);
    }

    public function listRoleUser(Request $request)
    {
        return response([
            'pengguna' => Pengguna::with('roleUser.role')->get()
        ]);
    }
}
