<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Log;

class ReadCsvController extends Controller
{
	public function migrasi_tb_kegiatan_patroli()
	{
		$file_n   = storage_path('tb_kegiatan_patroli.csv');
		$file     = fopen($file_n, "r");
		$all_data = array();

		$i = 1;

		$headers = array();

		// Loop through data tb_kegiatan_patroli
		while (($data = fgetcsv($file, 200, ",")) !== FALSE)
		{
			// Grab header
			if ($i == 1)
				$headers = $data;

			if ($i != 1) // Skip csv header
			{
				$data_indexed = array();

				// Assign header to data
				foreach ($headers as $key => $header) 
					$data_indexed[$header] = $data[$key];

				// Step 1
				// insert id_kegiatan, tgl_keg_patroli ke tabel kegiatan_patroli
				$kegiatan_patroli_id = DB::table('kegiatan_patroli')->insert(
					[
						'id'              => $data_indexed['id_kegiatan'],
						'tanggal_patroli' => $data_indexed['tgl_keg_patroli']
					]
				);

				// if insert success save id_kegiatan
				$kegiatan_patroli_id = ($kegiatan_patroli_id) ? $data_indexed['id_kegiatan'] : 0;
				
				echo "Insert kegiatan_patroli ";
				echo ($kegiatan_patroli_id) ? "success" : "FAILED";
				echo " kegiatan_patroli_insert_id = ".$kegiatan_patroli_id;
				echo "<br>";

				// Step 2
				if ($kegiatan_patroli_id) // hanya berjalan ketika step 1 berhasil
				{
					// cek id_kegiatan di tabel tb_lokasi_patroli dan tb_lokasi_udara untuk 
					// mengetahui dia itu patroli darat apa udara
					$exist_in_udara = $this->check_exist_in_udara($data_indexed['id_kegiatan']);

					// setelah tau patroli darat atau udara insert id_kegiatan, suhu, kelembaban, 
					// curah_hujan, kecepatan_angin, cuaca_pagi, cuaca_siang, cuaca_sore ke tabel baru
					// yang sesuai yaitu patroli_darat atau patroli_udara simpan insert_id nya
					$data_db = array(
						'kegiatan_patroli_id' => $kegiatan_patroli_id,
						'suhu'                => ($data_indexed['suhu'] == 'N/A' || empty($data_indexed['suhu'])) ? NULL : $data_indexed['suhu'],
						'kelembaban'          => ($data_indexed['kelembaban'] == 'N/A' || empty($data_indexed['kelembaban'])) ? NULL : $data_indexed['kelembaban'],
						'kecepatan_angin'     => ($data_indexed['kecepatan_angin'] == 'N/A' || empty($data_indexed['kecepatan_angin'])) ? NULL : $data_indexed['kecepatan_angin'],
						'curah_hujan'         => ($data_indexed['curah_hujan'] == 'N/A' || empty($data_indexed['curah_hujan'])) ? NULL : $data_indexed['curah_hujan'],
						'cuaca_siang'         => ($data_indexed['cuaca_siang'] == 'N/A' || empty($data_indexed['cuaca_siang'])) ? NULL : $data_indexed['cuaca_siang'],
						'cuaca_sore'          => ($data_indexed['cuaca_sore'] == 'N/A' || empty($data_indexed['cuaca_sore'])) ? NULL : $data_indexed['cuaca_sore'],
						'cuaca_pagi'          => ($data_indexed['cuaca_pagi'] == 'N/A' || empty($data_indexed['cuaca_pagi'])) ? NULL : $data_indexed['cuaca_pagi']
					);

					$patroli_udara_id = NULL;
					$patroli_darat_id = NULL;
					if ($exist_in_udara != NULL)
					{
						// Spesial data for patroli_udara
						$data_db['confidence'] = ($data_indexed['confidence'] == 'N/A' || empty($data_indexed['confidence'])) ? NULL : $data_indexed['confidence'];
						$data_db['distance']   = ($data_indexed['distance'] == 'N/A' || empty($data_indexed['distance'])) ? NULL : $data_indexed['distance'];
						$data_db['kegiatan']   = ($data_indexed['kegiatan'] == 'N/A' || empty($data_indexed['kegiatan'])) ? NULL : $data_indexed['kegiatan'];
						$data_db['latitude']   = ($data_indexed['latitude'] == 'N/A' || empty($data_indexed['latitude'])) ? NULL : $data_indexed['latitude'];
						$data_db['longitude']  = ($data_indexed['longitude'] == 'N/A' || empty($data_indexed['longitude'])) ? NULL : $data_indexed['longitude'];

						$patroli_udara_id = DB::table('patroli_udara')->insert($data_db);
						
						echo "Insert patroli_udara ";
						echo ($patroli_udara_id) ? "success" : "FAILED";
						echo " patroli_udara_insert_id = ".$patroli_udara_id;
					}
					else 
					{
						$patroli_darat_id = DB::table('patroli_darat')->insert($data_db);
						
						echo "Insert patroli_darat ";
						echo ($patroli_darat_id) ? "success" : "FAILED";
						echo " patroli_darat_insert_id = ".$patroli_darat_id;
					}

					echo "<br>";
					echo "=================================";
					echo "<br><br><br>";
					
				}
				// array_push($all_data, $data_indexed);
			}

			$i++;
		}

		// $this->pprint($all_data);

	}

	// Mencari apakah suatu id_kegiatan terdapat
	// di tabel tb_lokasi_udara
	public function check_exist_in_udara($id_kegiatan)
	{
		$lokasi_udara = $this->read_lokasi_udara();

		$result = NULL;

		foreach ($lokasi_udara as $lu) 
		{
			if ($lu['id_kegiatan'] == $id_kegiatan)
			{
				$result = $lu;
				break;
			}
		}
	}

	// Mencari apakah suatu id_kegiatan terdapat
	// di tabel tb_lokasi_patroli (lokasi patroli darat)
	public function check_exist_in_darat($id_kegiatan)
	{
		$lokasi_darat = $this->read_lokasi_darat();

		$result = NULL;

		foreach ($lokasi_darat as $ld) 
		{
			if ($ld['idkegiatan'] == $id_kegiatan)
			{
				$result = $ld;
				break;
			}
		}

		$this->pprint($result);
	}

	public function read_lokasi_udara()
	{
		$file_n   = storage_path('tb_lokasi_udara.csv'); 
	    $file     = fopen($file_n, "r"); 
	    $all_data = array(); 
	 
	    $i = 1;

	    $headers = array();

		while (($data = fgetcsv($file, 200, ",")) !== FALSE)
		{
			// Grab headers
			if ($i == 1)
			{
				$headers = $data;
			}

			if ($i != 1)
			{
				$tmp = array();

				// Assign header to data
				foreach ($headers as $key => $header) 
					$tmp[$header] = $data[$key];

				// Push final formated data
				array_push($all_data, $tmp);
			}

			$i++;
		}

		// echo "<pre>";
		// print_r($all_data);
		
		return $all_data;
	}

	public function read_lokasi_darat()
	{
		$file_n   = storage_path('tb_lokasi_patroli.csv'); 
	    $file     = fopen($file_n, "r"); 
	    $all_data = array(); 
	 
	    $i = 1;

	    $headers = array();

		while (($data = fgetcsv($file, 200, ",")) !== FALSE)
		{
			// Grab headers
			if ($i == 1)
			{
				$headers = $data;
			}

			if ($i != 1)
			{
				$tmp = array();

				// Assign header to data
				foreach ($headers as $key => $header) 
					$tmp[$header] = $data[$key];

				// Push final formated data
				array_push($all_data, $tmp);
			}

			$i++;
		}

		// echo "<pre>";
		// print_r($all_data);
		
		return $all_data;
	}

	public function read()
	{
	    $file_n   = storage_path('tb_kegiatan_patroli.csv'); 
	    $file     = fopen($file_n, "r"); 
	    $all_data = array(); 
	 
	    $i = 1; 

		while (($data = fgetcsv($file, 200, ",")) !== FALSE)
		{
			if ($i != 1)
			{
				array_push($all_data, $data);
			}

			$i++;
		}

		echo "<pre>";
		print_r($all_data);
	}

	private function pprint($data)
	{
		echo "<pre>";
		print_r($data);
	}
}