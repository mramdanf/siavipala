<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoriTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('inventori')->insert([
			['nama'=>'Mobil Triton'],
			['nama'=>'Motor KLX'],
			['nama'=>'Motor Viar'],
			['nama'=>'Mesin Max']
		]);
	}
}