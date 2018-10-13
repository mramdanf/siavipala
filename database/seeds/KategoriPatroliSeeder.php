<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class KategoriPatroliSeeder extends Seeder
{
	public function run()
	{
    DB::table('kategori_patroli')
      ->insert([['nama' => 'Mandiri'], ['nama' => 'Pencegahan'], ['nama' => 'Terpadu']]);
	}
}