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

				///////////////// Step 1 ///////////////////////

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

				
				if ($kegiatan_patroli_id) // hanya berjalan ketika step 1 berhasil
				{
					///////////////// Step 2 ///////////////////////
					$desa_kelurahan_id = $this->insert_tempat($data_indexed);


					///////////////// Step 3 ///////////////////////
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
						'cuaca_pagi'          => ($data_indexed['cuaca_pagi'] == 'N/A' || empty($data_indexed['cuaca_pagi'])) ? NULL : $data_indexed['cuaca_pagi'],
						
						///////////////// Step 4 ///////////////////////
						'desa_kelurahan_id'   => $desa_kelurahan_id
					);

					$patroli_udara_id = NULL;
					$patroli_darat_id = NULL;
					if ($exist_in_udara != NULL)
					{
						// Spesial data for patroli_udara
						$data_db['confidence'] = ($exist_in_udara['confidence'] == 'N/A' || empty($exist_in_udara['confidence'])) ? NULL : $exist_in_udara['confidence'];
						$data_db['distance']   = ($exist_in_udara['distance'] == 'N/A' || empty($exist_in_udara['distance'])) ? NULL : $exist_in_udara['distance'];
						$data_db['kegiatan']   = ($exist_in_udara['kegiatan'] == 'N/A' || empty($exist_in_udara['kegiatan'])) ? NULL : $exist_in_udara['kegiatan'];
						$data_db['latitude']   = ($exist_in_udara['latitude'] == 'N/A' || empty($exist_in_udara['latitude'])) ? NULL : $exist_in_udara['latitude'];
						$data_db['longitude']  = ($exist_in_udara['longitude'] == 'N/A' || empty($exist_in_udara['longitude'])) ? NULL : $exist_in_udara['longitude'];

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
					echo "=================================================================";
					echo "<br><br><br>";
					
				}
				// array_push($all_data, $data_indexed);
			}

			$i++;
		}

		// $this->pprint($all_data);

	}

	public function migrasi_tb_lokasi_patroli()
	{
		
		// Data tabel patroli_darat
		$list_patroli_darat = DB::table('patroli_darat')
								->get()->toArray();

		// Data dari CSV
		$tb_lokasi_patroli = $this->read_lokasi_darat();

		foreach ($list_patroli_darat as $patroli_darat) 
		{
			foreach ($tb_lokasi_patroli as $csv_lokasi_patroli)
			{
				//////////////// Step 1 //////////////////////
				// Mengisi kolom aktivitas_masyarakat dan keterangan_lokasi
				if ($patroli_darat->kegiatan_patroli_id == $csv_lokasi_patroli['idkegiatan'])
				{
					$aktivitas_masyarakat = $csv_lokasi_patroli['aktivitas'];
					$aktivitas_masyarakat = ($aktivitas_masyarakat == 'N/A') ? NULL : $aktivitas_masyarakat;
					$keterangan_lokasi = $csv_lokasi_patroli['keterangan'];
					$keterangan_lokasi = ($keterangan_lokasi == 'N/A') ? NULL : $keterangan_lokasi;
					$patroli_darat_update = DB::table('patroli_darat')
						->where('kegiatan_patroli_id', $patroli_darat->kegiatan_patroli_id)
						->update([
							'aktivitas_masyarakat' => $aktivitas_masyarakat,
							'keterangan_lokasi'    => $keterangan_lokasi
						]);

					echo "Patroli darat affected rows: ".$patroli_darat_update."<br>";
					break;
				}
			}
		}
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
				return $lu;
			}
		}

		return NULL;
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

	public function insert_tempat($kegiatan_patroli = array())
	{
		// Insert ke tabel provinsi
		// pastikan provinsi tersebut belum pernah diinsert
		$provinsi_exist = DB::table('provinsi')
							->where('nama', 'ILIKE', '%'.strtolower($kegiatan_patroli['provinsi']).'%')
							->first();

		// Provinsi belum ada
		$provinsi_insert_id = NULL;

		if ($provinsi_exist == NULL)
		{
			DB::table('provinsi')->insert(
				['nama' => $kegiatan_patroli['provinsi']]
			);
			$provinsi_insert_id = DB::getPdo()->lastInsertId();
			
			echo "Insert provinsi ";
			echo ($provinsi_insert_id) ? "success, provinsi_insert_id: ".$provinsi_insert_id : "FAILED";
			echo "<br>";
		}
		else
		{
			$provinsi_insert_id = $provinsi_exist->id;

			echo "Provinsi exist, provinsi_insert_id ".$provinsi_insert_id;
			echo "<br>";
		}

		// Insert ke tabel daops
		// pastikan daops tersebut belum pernah diinsert
		$daops = $kegiatan_patroli['daops'];
		$daops_insert_id = NULL;

		if ($daops != 'N/A' && $daops != NULL && $daops != '')
		{
			$daops_exist = DB::table('daops')
							->where('nama', 'ILIKE', '%'.strtolower($daops).'%')
							->first();

			if ($daops_exist == NULL)
			{
				DB::table('daops')->insert(
					[
						'nama'        => $kegiatan_patroli['daops'],
						'provinsi_id' => $provinsi_insert_id
					]
				);
				$daops_insert_id = DB::getPdo()->lastInsertId();

				echo "Insert daops ";
				echo ($daops_insert_id) ? "success, daops_insert_id: ".$daops_insert_id : "FAILED";
				echo "<br>";
			}
			else
			{
				$daops_insert_id = $daops_exist->id;

				echo "Daops exist, daops_insert_id ".$daops_insert_id;
				echo "<br>";
			}
		}

		// Insert ke tabel kota_kab
		// pastikan kota_kab tersebut belum pernah di insert
		$kota_kab = $kegiatan_patroli['kab_kota'];
		$kota_kab_insert_id = NULL;

		if ($kota_kab != 'N/A' && $kota_kab != NULL && $kota_kab != '')
		{
			$kota_kab_exist = DB::table('kota_kab')
								->where('nama', 'ILIKE', '%'.strtolower($kota_kab).'%')
								->first();

			if ($kota_kab_exist == NULL)
			{
				DB::table('kota_kab')->insert(
					[
						'nama'     => $kegiatan_patroli['kab_kota'],
						'daops_id' => $daops_insert_id
					]
				);
				$kota_kab_insert_id = DB::getPdo()->lastInsertId();

				echo "Insert kota kab ";
				echo ($kota_kab_insert_id) ? "success, kota_kab_insert_id: ".$kota_kab_insert_id : "FAILED";
				echo "<br>";
			}
			else
			{
				$kota_kab_insert_id = $kota_kab_exist->id;

				echo "Kota kab exist, kota_kab_insert_id ".$kota_kab_insert_id;
				echo "<br>";
			}
		}

		// Insert ke tabel kecamatan
		// pastikan kecamatan tersebut belum pernah diinsert
		$kecamatan = $kegiatan_patroli['kecamatan'];
		$kecamatan_insert_id = NULL;

		if ($kecamatan != 'N/A' && $kecamatan != NULL && $kecamatan != '')
		{
			$kecamatan_exist = DB::table('kecamatan')
								->where('nama', 'ILIKE', '%'.$kecamatan.'%')
								->first();

			if ($kecamatan_exist == NULL)
			{
				DB::table('kecamatan')->insert(
					[
						'kota_kab_id' => $kota_kab_insert_id,
						'nama' => $kecamatan
					]
				);
				$kecamatan_insert_id = DB::getPdo()->lastInsertId();

				echo "Insert kecamatan ";
				echo ($kecamatan_insert_id) ? "success, kecamatan_insert_id: ".$kecamatan_insert_id : "FAILED";
				echo "<br>";
			}
			else
			{
				$kecamatan_insert_id = $kecamatan_exist->id;

				echo "Kecamatan exist, kecamatan_insert_id ".$kecamatan_insert_id;
				echo "<br>";
			}
		}

		// Insert ke tabel desa kelurahan
		// pastikan desa_kelurahan belum pernah diinsert sebelumnya
		$desa_kelurahan = $kegiatan_patroli['desa_kelurahan'];
		$desa_kelurahan_insert_id = NULL;

		if ($desa_kelurahan != 'N/A' && $desa_kelurahan != NULL && $desa_kelurahan != '')
		{
			$desa_kelurahan_exist = DB::table('desa_kelurahan')
										->where('nama', 'ILIKE', '%'.strtolower($desa_kelurahan).'%')
										->first();

			if ($desa_kelurahan_exist == NULL)
			{
				DB::table('desa_kelurahan')->insert(
					[
						'nama' => $desa_kelurahan,
						'kecamatan_id' => $kecamatan_insert_id
					]
				);
				$desa_kelurahan_insert_id = DB::getPdo()->lastInsertId();

				echo "Insert desa kelurahan ";
				echo ($desa_kelurahan_insert_id) ? "success, desa_kelurahan_insert_id: ".$desa_kelurahan_insert_id : "FAILED";
				echo "<br>";
			}
			else
			{
				$desa_kelurahan_insert_id = $desa_kelurahan_exist->id;

				echo "Desa kelurahan exist, desa_kelurahan_insert_id ".$desa_kelurahan_insert_id;
				echo "<br>";
			}
		}

		return $desa_kelurahan_insert_id;
		
	}

	public function test()
	{
		// \DB::listen(function($sql) {
		// 	var_dump($sql);
		// });

		// Insert ke tabel provinsi
		// pastika provinsi tersebut belum pernah diinsert
		$provinsi_exist = DB::table('provinsi')
							->where('nama', 'ILIKE', '%'.strtolower('Kalimantan barat').'%')
							// ->pluck('id')->toArray();
							->first();

		$this->pprint($provinsi_exist->nama);

		// DB::connection()->enableQueryLog();
		// dd(DB::getQueryLog());
		
	}

	private function pprint($data)
	{
		echo "<pre>";
		print_r($data);
	}
}