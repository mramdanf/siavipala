<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('anggota')->insert([
			['nama'=>'Yuni Setianingroom', 'kategori_anggota_id'=>2, 'email'=>'yuni@gmail.com', 'no_telepon'=>'8122334455']
		]);
	}
}