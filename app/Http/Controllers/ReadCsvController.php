<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;
use Illuminate\Support\Facades\Storage;

class ReadCsvController extends Controller
{
	public function read()
	{
		$file_n = storage_path('tb_kegiatan_patroli.csv');
		$file   = fopen($file_n, "r");
		$all_data = array();

		$i = 1;
		while (($data = fgetcsv($file, 200, ",")) !== FALSE)
		{
			if ($i != 1)
				array_push($all_data, $data);

			$i++;
		}

		echo "<pre>";
		print_r($all_data);
	}
}