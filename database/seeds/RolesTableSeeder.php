<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate roles
        $roles = [
            [
                'name' => 'administrator',
                'display_name' => 'Administrator'
            ],
            [
                'name' => 'tim_patroli',
                'display_name' => 'Tim Patroli'
            ],
            [
                'name' => 'pengguna_terdaftar',
                'display_name' => 'Pengguna Terdaftar'
            ]
        ];

        DB::table('roles')
         ->insert($roles);

        // Assign user to role
        $users = DB::table()

        // Populate permission

        // Assing role to permission
    }
}
