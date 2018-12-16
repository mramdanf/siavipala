<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission;

class PermissionController extends Controller
{
    public function list()
    {
        return response([
            'data' => Permission::all()
        ]);
    }

    public function store(Request $r)
    {
        $this->validate($r, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        // Cek if permission name exist
        $permissionExist = Permission::where('name', $r->input('name'));

        if ($permissionExist->count())
        {
            return response()
                ->json(
                    array('message'=>'Cannot create permission. Permission name '.$r->input('name').' exist'), 
                    200);
        }

        $permission = new Permission();
        $permission->name = $r->input('name');
        $permission->display_name = $r->input('display_name');
        $permission->description = $r->input('description');
        $permission->save();

        return response([
            'message' => 'Create permission success'
        ]);
    }

    public function update(Request $r)
    {
        $this->validate($r, [
            'id' => 'required',
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        // Get old permission
        $oldPermission = Permission::where('id', $r->input('id'))->first();

        if ($oldPermission->count() <= 0)
        {
            return response()
                ->json(
                    array('message'=>'No permission found'), 
                    404
                );
        }

        // Cek permission name exist
        $permissionExist = Permission::where('name', $r->input('name'));
        if ($permissionExist->count() > 0)
        {
            if ($r->input('name') != $oldPermission->name)
            {
                return response()->json(
                    array('message'=>'Cannot update permission. Permission name '.$r->input('name').' already exist'), 
                    200
                );
            }
        }

        $oldPermission->name = $r->input('name');
        $oldPermission->display_name = $r->input('display_name');
        $oldPermission->description = $r->input('description');
        $oldPermission->save();

        return response([
            'message' => 'Update permission success.'
        ]);
    }

    public function delete(Request $r)
    {
        $this->validate($r, [
            'id' => 'required'
        ]);

        // Cek permission exist
        $permission = Permission::where('id', $r->input('id'));
        if ($permission->count() <= 0)
        {
            return response()->json(
                array('messge'=>'No permission found.'), 
                404
            );
        }

        $permission->delete();
        return response([
            'message' => 'Delete permission success.'
        ]);
    }
}
