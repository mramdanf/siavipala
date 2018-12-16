<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\NavigationMenu;
use App\Models\RoleNavigationMenu;

class RoleNavigationMenuController extends Controller
{
    public function list()
    {
        $roles = Role::with([
            'roleNavigationMenu.navigationMenu'
        ])
        ->has('roleNavigationMenu.navigationMenu')
        ->get();

        return response([
            'roles' => $roles
        ]);
    }

    public function assignNavigationMenuToRole(Request $req)
    {
        $this->validate($req, [
            'role_id' => 'required|numeric',
            'navigation_menu_id' => 'required|numeric'
        ]);

        // Check if role exist
        $role = Role::find($req->input('role_id'));
        if (!$role)
        {
            return response()->json(
                array('message'=>'Role with id '.$req->input('role_id').' not found'), 404);
        }

        // Check if menu navigation exist
        $navMenu = NavigationMenu::find($req->input('navigation_menu_id'));
        if (!$navMenu)
        {
            return response()->json(
                array('message'=>'Navigation menu with id '.$req->input('navigation_menu_id').' not found'), 404);
        }

        // Check if role already has that navigation menu
        $roleNavigationMenuExist = RoleNavigationMenu::where('role_id', $req->input('role_id'))
                                                    ->where('navigation_menu_id', $req->input('navigation_menu_id'));
        if ($roleNavigationMenuExist->count() > 0)
        {
            return response()->json(
                array('message'=>'Role '.$role->display_name.' already has navigation menu '.$navMenu->name), 
                400);
        }

        // Assign menu navigation to role
        $roleNavigationMenu = new RoleNavigationMenu();
        $roleNavigationMenu->role_id = $req->input('role_id');
        $roleNavigationMenu->navigation_menu_id = $req->input('navigation_menu_id');
        $roleNavigationMenu->save();

        $role = Role::with([
            'roleNavigationMenu.navigationMenu'
        ])
        ->where('id', $req->input('role_id'))
        ->first();

        return response([
            'message' => 'Assing navigation menu to role success.',
            'role' => $role
        ]);
    }

    public function unassignNavigationMenuFromRole(Request $req)
    {
        $this->validate($req, [
            'role_id' => 'required|numeric',
            'navigation_menu_id' => 'required|numeric'
        ]);

        // Check if role exist
        $role = Role::find($req->input('role_id'));
        if (!$role)
        {
            return response()->json(
                array('message'=>'Role with id '.$req->input('role_id').' not found'), 404);
        }

        // Check if menu navigation exist
        $navMenu = NavigationMenu::find($req->input('navigation_menu_id'));
        if (!$navMenu)
        {
            return response()->json(
                array('message'=>'Navigation menu with id '.$req->input('navigation_menu_id').' not found'), 404);
        }

        // Check if role already has that navigation menu
        $roleNavigationMenuExist = RoleNavigationMenu::where('role_id', $req->input('role_id'))
                                                    ->where('navigation_menu_id', $req->input('navigation_menu_id'));
        if ($roleNavigationMenuExist->count() <= 0)
        {
            return response()->json(
                array('message'=>'Role '.$role->display_name.' dosent have navigation menu '.$navMenu->name), 
                400);
        }

        // Unassign menu navigation from role
        $roleNavigationMenuExist->delete();

        $role = Role::with([
            'roleNavigationMenu.navigationMenu'
        ])
        ->where('id', $req->input('role_id'))
        ->first();

        return response([
            'message' => 'Unassign navigation menu from role success.',
            'role' => $role
        ]);
    }
}
