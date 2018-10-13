<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class ArtifisialParamSeeder extends Seeder
{
	public function run()
	{
		DB::table('artifisial_param')->insert([['nama'=>'rendah'], ['nama'=>'sedang'], ['nama'=>'tinggi']]);
	}
}