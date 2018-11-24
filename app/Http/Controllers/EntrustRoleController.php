<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\Pengguna;

class EntrustRoleController extends Controller
{
    public function createRole(Request $request){

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

    public function createPermission(Request $request){
        // Todo       
    }

    public function assignRole(Request $request) {

        $data = $request->all();
        $adminRole = Role::find($data['role_id'])->first();
        $pengguna  = Pengguna::find($data['pengguna_id'])->first();

        $pengguna->attachRole($adminRole);

        return response([
            'data' => 'Success'
        ]);
    }

    public function attachPermission(Request $request){
        return response([
            'data' => 'yuhuuu'
        ]);
    }
}
