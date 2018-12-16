<?php

use Illuminate\Database\Seeder;

use App\Models\AnggotaPatroli;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Pengguna;

class AddAccessManajemenPermissionSeeder extends Seeder
{
    protected $roles = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->roles = [
            [
                'name' => 'administrator',
                'pengguna' => [
                    'ramdan'
                ],
                'permissions' => [
                    'role-list',
                    'role-create',
                    'role-update',
                    'role-delete',
                    'permission-list',
                    'permission-create',
                    'permission-update',
                    'permission-delete',
                    'role-user-list',
                    'role-user-assign-role-user',
                    'role-user-unassign-role-user',
                    'permission-role-list',
                    'permission-role-assign-permission-role',
                    'permission-role-unassign-permission-role',
                    'navigation-menu-list',
                    'navigation-menu-create',
                    'navigation-menu-update',
                    'navigation-menu-delete',
                    'role-navigation-menu-list',
                    'role-navigation-menu-assign-navigation-menu-role',
                    'role-navigation-menu-unassign-navigation-menu-role'
                ]
            ],

        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPermissions();

        $this->assignPermissionRole();
    }

    private function createPermissions()
    {
        foreach($this->roles as $role)
        {
            foreach($role['permissions'] as $permission)
            {
                $newPermission = new Permission();
                $newPermission->name = $permission;
                $newPermission->display_name = ucwords(str_replace('-', ' ', $permission));
                $newPermission->save();
            }
        }
    }

    private function assignPermissionRole()
    {
        foreach($this->roles as $key_roles => $role)
        {
            $roleInDb = Role::where('name', 'ilike', '%'.$role['name'].'%')->first();
            if ($roleInDb != NULL)
            {
                foreach($role['permissions'] as $key_permission => $permission)
                {
                    $permissionInDb = Permission::where('name', 'ilike', '%'.$permission.'%')->first();
                    if ($permissionInDb)
                    {
                        $roleInDb->attachPermission($permissionInDb);
                        if ($roleInDb->hasPermission($permissionInDb->name))
                        {
                            $this->roles[$key_roles]['permissions'][$key_permission] = [];
                            $this->roles[$key_roles]['permissions'][$key_permission]['name']   = $permissionInDb['name'];
                            $this->roles[$key_roles]['permissions'][$key_permission]['status'] = 'OK';
                        }
                    }
                }
            }
        }
    }
}
