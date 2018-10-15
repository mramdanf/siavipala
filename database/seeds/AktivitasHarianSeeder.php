<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AktivitasHarianSeeder extends Seeder
{
	public function run()
	{
		DB::table('aktivitas_harian')->insert([
			['nama'=>'Apel pagi dan apel sore'],
			['nama'=>'Melengkapi Administrasi patroli mandiri'],
			['nama'=>'Pemantauan hospot'],
			['nama'=>'IN.HOUSE TRAINIG'],
			['nama'=>'Menggrid poto kegiatan dengan mudah dan Praktis'],
			['nama'=>'Giat maghrib']
		]);
	}
}