<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PoskoSeeder extends Seeder
{
	public function run()
	{
		DB::table('posko')->insert(
			['nama' => 'posko jalak harupat', 
			'kecamatan_id' => 580]
		);
	}
}