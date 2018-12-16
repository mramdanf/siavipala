<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RoleUser;
use App\Models\Pengguna;
use App\Models\Role;

class RoleUserController extends Controller
{
    public function list()
    {
        $roles = Role::with([
            'roleUser.pengguna'
        ])
        ->get();

        return response([
            'roles' => $roles
        ]);
    }

    public function assignRoleToUser(Request $req)
    {
        $this->validate($req, [
            'pengguna_id' => 'required',
            'role_id' => 'required'
        ]);

        // Check user exist
        $pengguna = Pengguna::where('id', $req->input('pengguna_id'))->first();
        if (!$pengguna)
        {
            return response()->json(
                array('message'=>'No user found.'), 404);
        }

        // Check role exist
        $role = Role::where('id', $req->input('role_id'))->first();
        if (!$role)
        {
            return response()->json(
                array('message'=>'No role found'), 404);
        }

        // Check if user has the role
        if($pengguna->hasRole($role->name))
        {
            return response()->json(
                array('message'=>'Pengguna '.$pengguna->nama.' already has role '.$role->name), 
                400);
        }

        // Assign role to user
        $pengguna->attachRole($role);

        if($pengguna->hasRole($role->name))
        {
            $pengguna = Pengguna::with([
                'roleUser.role'
            ])
            ->where('id', $req->input('pengguna_id'))
            ->first();

            return response([
                'message' => 'Assign role to user success.',
                'user' => $pengguna
            ]);
        }
    }

    public function unassignRoleFromUser(Request $req)
    {
        $this->validate($req, [
            'pengguna_id' => 'required',
            'role_id' => 'required'
        ]);

        // Check user exist
        $pengguna = Pengguna::where('id', $req->input('pengguna_id'))->first();
        if (!$pengguna)
        {
            return response()->json(
                array('message'=>'No user found.'), 404);
        }

        // Check role exist
        $role = Role::where('id', $req->input('role_id'))->first();
        if (!$role)
        {
            return response()->json(
                array('message'=>'No role found'), 404);
        }

        // Check if user has the role
        if(!$pengguna->hasRole($role->name))
        {
            return response()->json(
                array('message'=>'Pengguna '.$pengguna->nama.' dosent have '.$role->name.' role'), 
                400);
        }

        // Unassign role from user
        $roleUser = RoleUser::where('pengguna_id', $req->input('pengguna_id'))
                            ->where('role_id', $req->input('role_id'));
        $roleUser->delete();

        if(!$pengguna->hasRole($role->name))
        {
            $pengguna = Pengguna::with([
                'roleUser.role'
            ])
            ->where('id', $req->input('pengguna_id'))
            ->first();

            return response([
                'message' => 'Unassign role from user success.',
                'user' => $pengguna
            ]);
        }
    }
}
