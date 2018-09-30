<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class PenggunaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('pengguna')->insert([
			'nama' => 'ramdan',
			'email' => 'ramdan@gmail.com',
			'password' => app('hash')->make('123'),
			'no_telepon' => '081223445566',
			'remember_token' => str_random(10)
		]);
	}
}