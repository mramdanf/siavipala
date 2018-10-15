<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SatelitTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('satelit')->insert([
			['nama'=>'noa 18'],
			['nama'=>'terra/aqua']
		]);
	}
}