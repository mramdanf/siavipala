<?php

use Illuminate\Database\Seeder;

use App\Models\NavigationMenu;

class NavigationMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navigationMenus = [
            'sipongi live update',
            'patroli hari ini',
            'data provinsi',
            'rekapitulasi patroli',
            'manajemen tim patroli'
        ];

        foreach($navigationMenus as $nm)
        {
            $navigationMenu = new NavigationMenu();
            $navigationMenu->display_name = ucwords($nm);
            $navigationMenu->name = preg_replace('/\s/', '-', $nm);
            $navigationMenu->save();
        }
    }
}
