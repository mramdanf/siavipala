<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NavigationMenu;

class NavigationMenuController extends Controller
{
    public function list()
    {
        return response([
            'data' => NavigationMenu::all()
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'display_name' => 'required',
            'link' => 'required'
        ]);

        // Check if menu exist
        $menuExist = NavigationMenu::where('name', $req->input('name'))->first();
        if ($menuExist)
        {
            return response()->json(
                array('message'=>'Navigation menu '.$req->input('name').' already exist'), 400);
        }

        // Add menu
        $menu = new NavigationMenu();
        $menu->name = $req->input('name');
        $menu->display_name = $req->input('display_name');
        $menu->link = $req->input('link');
        $menu->save();

        return response([
            'message' => 'Create navigation menu success.'
        ]);
    }

    public function update(Request $req)
    {
        $this->validate($req, [
            'id' => 'required',
            'name' => 'required',
            'display_name' => 'required',
            'link' => 'required'
        ]);
        
        // Check not valid id
        $oldMenu = NavigationMenu::find($req->input('id'));
        if (!$oldMenu)
        {
            return response()->json(
                array('message'=>'Navigation menu '.$req->input('name').' not found'), 404);
        }

        // Check if menu exist
        $menuExist = NavigationMenu::where('name', $req->input('name'))->first();
        if ($menuExist)
        {
            if ($menuExist->name != $oldMenu->name)
            {
                return response()->json(
                    array('message'=>'Navigation menu '.$req->input('name').' already exist'), 400);
            }
        }

        // Update menu
        $oldMenu->name = $req->input('name');
        $oldMenu->display_name = $req->input('display_name');
        $oldMenu->link = $req->input('link');
        $oldMenu->save();

        return response([
            'message' => 'Update navigation menu success.'
        ]);
    }

    public function delete(Request $req)
    {
        $this->validate($req, [
            'id' => 'required'
        ]);

        // Check not valid id
        $menu = NavigationMenu::find($req->input('id'));
        if (!$menu)
        {
            return response()->json(
                array('message'=>'Navigation menu with id '.$req->input('id').' not found'), 404);
        }

        $menu->delete();

        return response([
            'message' => 'Delete navigation menu success.'
        ]);
    }
}
