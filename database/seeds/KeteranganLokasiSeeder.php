<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class KeteranganLokasiSeeder extends Seeder
{
	public function run()
	{
		DB::table('keterangan_lokasi')
		->insert([
			['nama'=>'Lokasi konsentrasi penduduk'], 
			['nama'=>'akses yg bisa digunakan hanya jalan setapak'], 
		]);
	}
}