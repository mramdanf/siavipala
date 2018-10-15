<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriAnggotaSeeder extends Seeder
{
	public function run()
	{
		DB::table('kategori_anggota')->insert([
			['nama'=>'TNI'],
			['nama'=>'Manggala Agni'],
			['nama'=>'Masyarakat']
		]);
	}
}