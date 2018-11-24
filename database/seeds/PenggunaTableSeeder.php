<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class PenggunaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('pengguna')
		->where('id', 6)
		->update([
			'password' => app('hash')->make('123')
		]);
	}
}