<?php

use Illuminate\Database\Seeder;

use App\Models\AnggotaPatroli;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Pengguna;

class AddNewUnduhRekapPermissionSeeder extends Seeder
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
                    'patroli-unduh-rekapitulasi-laporan'
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
