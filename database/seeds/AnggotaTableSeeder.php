<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaTableSeeer extends Seeder
{
	public function run()
	{
		DB::table('anggota')->insert([
			// ['nama'=>]
		]);
	}
}