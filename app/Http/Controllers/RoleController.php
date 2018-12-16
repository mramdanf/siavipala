<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    public function list()
    {
        return response([
            'roles' => Role::all()
        ]);
    }

    public function store(Request $r)
    {
        $this->validate($r, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        // Check if name exist
        $roleExist = Role::where('name', $r->input('name'));

        if ($roleExist->count())
        {
            return response()->json(array('message' => 'cannot add role. Role name '.$r->input('name').' exist'), 400);
        }

        $role = new Role();
        $role->name = $r->input('name');
        $role->display_name = $r->input('display_name');
        $role->description = $r->input('description');
        $role->save();

        return response([
            'message' => 'Create role success.' 
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
        
        // Get old role
        $oldRole = Role::find($r->input('id'));
        
        if ($oldRole->count() <= 0)
        {
            return response()
                ->json(
                    array('message' => 'No role found'), 
                    404
                );
        }

        // Check if name exist
        $roleExist = Role::where('name', $r->input('name'));
        
        // > 1 mean there is role name
        if ($roleExist->count())
        {
            if ($r->input('name') != $oldRole->name)
            {
                return response()
                    ->json(
                        array('message' => 'cannot update role. Role name '.$r->input('name').' exist'), 
                        400
                    );
            }
            
        }

        $oldRole->name = $r->input('name');
        $oldRole->display_name = $r->input('display_name');
        $oldRole->description = $r->input('description');
        $oldRole->save();

        return response([
            'message' => 'Update role success.' 
        ]);
    }

    public function delete(Request $r)
    {
        $this->validate($r, [
            'id' => 'required'
        ]);

        $role = Role::where('id', $r->input('id'));
        $role->delete();

        return response([
            'message' => 'Delete role success.'
        ]);
    }
}