<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoriPatroliTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('inventori_patroli')
			->insert([
				['kegiatan_patroli_id'=>'1', 'inventori_id'=>2, 'jumlah_unit'=>3],
				['kegiatan_patroli_id'=>'1', 'inventori_id'=>3, 'jumlah_unit'=>3],
				['kegiatan_patroli_id'=>'1', 'inventori_id'=>4, 'jumlah_unit'=>5]
			]);
	}
}