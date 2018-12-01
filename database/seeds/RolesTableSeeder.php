<?php

use Illuminate\Database\Seeder;

use App\Models\AnggotaPatroli;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Pengguna;

class RolesTableSeeder extends Seeder
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
                'name' => 'pengguna_terdaftar',
                'pengguna' => [
                    'rudi'
                ],
                'permissions' => [
                    'patroli-unduh-laporan'
                ],
            ],
            
            [
                'name' => 'tim_patroli',
                'pengguna' => [
                    'Dhani'
                ],
                'permissions' => [
                    'patroli-create',
                    'patroli-update',
                    'patroli-delete'
                ],
            ],
            
            [
                'name' => 'administrator',
                'pengguna' => [
                    'ramdan'
                ],
                'permissions' => [
                    'pengguna-list',
                    'pengguna-create',
                    'pengguna-update',
                    'pengguna-delete',

                    'provinsi-create',
                    'provinsi-update',
                    'provinsi-delete',

                    'daops-create',
                    'daops-update',
                    'daops-delete',

                    'kotakab-create',
                    'kotakab-update',
                    'kotakab-delete',

                    'kecamatan-create',
                    'kecamatan-update',
                    'kecamatan-delete',

                    'posko-create',
                    'posko-update',
                    'posko-delete',

                    'desakelurahan-create',
                    'desakelurahan-update',
                    'desakelurahan-delete',
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
        // Creating roles
        $this->createRoles();

        // Creating permission
        $this->createPermissions();

        // Assign role to pengguna
        $this->assignPermissionRole();

        // Add user patroli
        $this->addPengguna([
            'nama' => 'Dhani',
            'email' => 'dhani@gmail.com',
            'password' => '123'
        ]);

        // Assign User Role
        $this->assignUserRole();
    }

    private function addPengguna($data = array())
    {
        $pengguna = new Pengguna();
        $pengguna->nama = $data['nama'];
        $pengguna->email = $data['email'];
        $pengguna->password = app('hash')->make($data['password']);
        $pengguna->save();
    }

    private function createRoles()
    {
        foreach($this->roles as $role)
        {
            $objRole = new Role();
            $objRole->name = $role['name'];
            $objRole->display_name = ucwords(str_replace('_',' ',$role['name']));
            $objRole->save();
        }
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

    private function assignUserRole()
    {
        foreach($this->roles as $key_roles => $role)
        {
            foreach($role['pengguna'] as $key_pengguna => $pengguna)
            {
                $penggunaInDb = Pengguna::where('nama', 'ilike', '%'.$pengguna.'%')->first();
                if ($penggunaInDb)
                {
                    $roleInDb = Role::where('name', 'ilike', '%'.$role['name'].'%')->first();
                    if ($roleInDb)
                    {
                        $penggunaInDb->attachRole($roleInDb);
                        if ($penggunaInDb->hasRole($role['name']))
                        {
                            $this->roles[$key_roles]['pengguna'][$key_pengguna] = [];
                            $this->roles[$key_roles]['pengguna'][$key_pengguna]['nama'] = $penggunaInDb['nama'];
                            $this->roles[$key_roles]['pengguna'][$key_pengguna]['status'] = 'OK';
                        }
                    }
                }
            }
        }
    }
}
