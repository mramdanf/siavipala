# Dokumentasi API Siavipala

## Table of Contents
- [Login](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#login)
- [Resume Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#resume-provinsi)
- [Kategori Curah Hujan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-curah-hujan)
- [Kategori Cuaca](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-cuaca)
- [Kategori Artifisial Param](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-artifisial-param)
- [Sumber Air](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#sumber-air)
- [Aktivitas Harian](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#aktivitas-harian)
- Patroli
  - [List Kegiatan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kegiatan-patroli)
  - [Kategori Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-patroli)
  - [Create Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-laporan-patroli)
  - [Update Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-laporan-patroli)
  - [Delete Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-laporan-patroli)
- Anggota
  - [Kategori Anggota](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-anggota)
  - [List Anggota](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-anggota)
  - [Create Anggota](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-anggota)
  - [Update Anggota](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-anggota)
  - [Delete Anggota](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-anggota)
- Pengguna
  - [List Pengguna](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-pengguna)
  - [Create Pengguna](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-pengguna)
  - [Delete Pengguna](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-pengguna)
  - [Update Pengguna](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-pengguna)
- Provinsi
  - [List Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-provinsi)
  - [Create Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-provinsi)
  - [Update Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-provinsi)
  - [Delete Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-provinsi)
- Daops
  - [List Daops](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-daops)
  - [Create Daops](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-daops)
  - [Update Daops](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-daops)
  - [Delete Daops](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-daops)
- Kota Kab
  - [List Kotakab](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kotakab)
  - [Create Kotakab](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-kotakab)
  - [Update Kotakab](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-kotakab)
  - [Delete Kotakab](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-kotakab)
- Kecamatan
  - [List Kecamatan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kecamatan)
  - [Create Kecamatan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-kecamatan)
  - [Update Kecamatan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-kecamatan)
  - [Delete Kecamatan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-kecamatan)
- Posko
  - [List Posko](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-posko)
  - [Create Posko](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-posko)
  - [Update Posko](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-posko)
  - [Delete Posko](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-posko)

**Login**
----

* **URL**

  `{{host}}/api/auth/login`

* **Method**

  `POST`

* **Data Params (Post Params)**

  * `email (string) (required)`
  * `password (string) (required)`

* **Success Response**

  ```
  {
    "message": "Login success",
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3Qvc2lhdmlwYWxhL3B1YmxpYy9hcGkvYXV0aC9sb2dpbiIsImlhdCI6MTUzOTM4NTk4MSwiZXhwIjoxNTM5Mzg5NTgxLCJuYmYiOjE1MzkzODU5ODEsImp0aSI6IlhCZHVMUTdzdGZiMHllV2IifQ.KNqA10aDMB_sAWqPC4VAaCw03X3tkt9xwOTWjmalcDQ"
    }
  }
  ```

* **Error Response**

  * **Code**

    `401 HTTP_UNAUTHORIZED`

  * **Content**

    ```
    {
      "message": "Invalid credentials"
    }
    ```
<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Kegiatan Patroli**
----

* **URL**

  `{{host}}/api/patroli/list`

* **Method**

  `GET`

* **Data Params**

  `none`

* **Success Response**

	```
	Responsenya panjang bgt, langsung dicoba aja dipostman atau di browser langsung.
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Provinsi**
----

* **URL**

  `{{host}}/api/provinsi/list`

* **Method**

  `GET`

* **Data Params**

  `none`

* **Success Response**

	```
	{
    "data": [
			{
				"id": 54,
				"nama": "Kalimantan Barat",
				"created_at": null,
				"updated_at": null
			},
			{
				"id": 55,
				"nama": "Sumatera Selatan",
				"created_at": null,
				"updated_at": null
			},
			...
		]
	}
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Resume Provinsi**
----

* **URL**

  `{{host}}/api/provinsi/resume`

* **Method**

  `GET`

* **Data Params**

  * `kode_provinsi (unsignedInteger) (required)`
  * `tahun (unsignedInteger) (required)`

* **Success Response**

	```
	{
      "query": {
          "tahun": "2016",
          "kode_provinsi": "54"
      },
      "statistik_harian": {
          "kegiatan_patroli": 4,
          "kebakaran": 2
      },
      "statistik_tahunan": {
          "kebakaran": 2,
          "daops": 16
      }
    }
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Kategori Patroli**
----

* **URL**

  `{{host}}/api/kategori-patroli/list`

* **Method**

  `GET`

* **Data Params**

  `none`

* **Success Response**

	```
    {
      "data": [
        {
            "id": 1,
            "nama": "Mandiri",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "nama": "Pencegahan",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "nama": "Terpadu",
            "created_at": null,
            "updated_at": null
        }
      ]
    }
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Laporan Patroli**
----

* **URL**

  `{{host}}/api/patroli/create`

* **Method**

  `POST`

* **Headers**

  * `Authorization: Bearer {token}`

* **Data Params (Raw data/payload/json)**

  * Patroli Darat

  ```
    {
      // Data general
      "tanggal_patroli": "2018-04-06" (date),
      "kategori_patroli_id": 1 (unsignedInteger),
      "jenis_patroli": "DARAT",
      "desa_kelurahan_id": 1079,
      "cuaca_pagi_id": 1,
      "cuaca_siang_id": 1,
      "cuaca_sore_id": 1,
      "curah_hujan_id": 1,
      "suhu": 10.10 (double),
      "kelembapan": 10.10 (double),
      "kecepatan_angin": 10.10 (double),
      "ffmc_kkas_id": 1 (integer),
      "fwi_id": 1 (unsignedInteger),
      "dc_kk_id": 1 (unsignedInteger),
      "inventori_patroli": [
        {
          "inventori_id": 1 (unsignedInteger)
        }
      ],
      "hotspot": [
        {
          "satelit_id": 1 (unsignedInteger),
          "deskripsi": "lorem ipsum" (text) 
        }
      ],
      "aktivitas_harian_patroli": [
        {
          "aktivitas_harian_id": 1 (unsignedInteger)
        }
      ],
      "anggota_patroli": [
        {
          "anggota_id": 1 (unsignedInteger)
        }
      ],

      // Data spesifik patroli darat
      "aktivitas_masyarakat": "membersihkan lahan dan bercocok tanam" (text),
      "keterangan_lokasi": "akses yg bisa digunakan hanya jalan setapak" (text),
      "hasil_uji": [
        {
          "nama_pengujian": "Uji Remas Daun" (string, 400),
          "hasil": "Daun agak kering" (text)
        }
      ],
      "kondisi_sumber_air": [
        {
          "sumber_air_id": 1 (unsignedInteger),
          "longitude": -1.963555556 (double),
          "latitude": 110.1340833 (double),
          "panjang": 2 (double),
          "lebar": 2 (double),
          "kedalaman": 1.5 (double),
        }
      ],
      "kondisi_vegetasi": [
        {
          "vegetasi_id": 1 (unsignedInteger),
          "kategori_kondisi_vegetasi_id": 1 (unsignedInteger),
          "potensi_karhutla_id": 1 (unsignedInteger),
          "kondisi_karhutla_id": 1 (unsignedInteger),
          "luas_tanah": 3 (double),
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
        }
      ],
      "kondisi_tanah": [
        {
          "tanah_id": 1 (unsignedInteger),
          "potensi_karhutla_id": 1 (unsignedInteger),
          "kondisi_karhutla_id": 1 (unsignedInteger),
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
          "kedalaman_gambut": 1.5 (double)
        }
      ],
      "pemadaman": [
        {
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
          "luas_terbakar": 1.5 (double)
        }
      ]
    }
  ```

  * Patroli Udara

  ```
    {
      // Data general
      "tanggal_patroli": "2018-04-06" (date),
      "kategori_patroli_id": 1 (unsignedInteger),
      "jenis_patroli": "UDARA",
      "desa_kelurahan_id": 1079,
      "cuaca_pagi_id": 1,
      "cuaca_siang_id": 1,
      "cuaca_sore_id": 1,
      "curah_hujan_id": 1,
      "suhu": 10.10 (double),
      "kelembapan": 10.10 (double),
      "kecepatan_angin": 10.10 (double),
      "ffmc_kkas_id": 1 (integer),
      "fwi_id": 1 (unsignedInteger),
      "dc_kk_id": 1 (unsignedInteger),
      "Inventori_patroli": [
        {
          "inventori_id": 1 (unsignedInteger)
        }
      ],
      "hotspot": [
        {
          "satelit_id": 1 (unsignedInteger),
          "deskripsi": "lorem ipsum" (text) 
        }
      ],
      "aktivitas_harian_patroli": [
        {
          "aktivitas_harian_id": 1 (unsignedInteger)
        }
      ],
      "anggota_patroli": [
        {
          "anggota_id": 1 (unsignedInteger)
        }
      ],

      // Data spesifik patroli udara
      "latitude": 10.10 (double),
      "longitude": 20.20 (double),
      "confidence": 11.22 (double),
      "distance": 111.21 (double),
      "radial": 2312.21 (double),
      "kegiatan": "lorem ipsum" (text),
      "keterangan": "lorem ipsum" (text),
    }
  ```

* **Success Response**

	```
    {
      "data": "Create laporan kegiatan patroli sukses."
    }
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Update Laporan Patroli**
----

* **URL**

  `{{host}}/api/patroli/update`

* **Method**

  `POST`

* **Headers**

  * `Authorization: Bearer {token}`

* **Data Params (Raw data/payload/json)**

  * Patroli Darat

  ```
    {
      // Data general
      "kegiatan_patroli_id: 18,
      "tanggal_patroli": "2018-04-06" (date),
      "kategori_patroli_id": 1 (unsignedInteger),
      "jenis_patroli": "DARAT",
      "desa_kelurahan_id": 1079,
      "cuaca_pagi_id": 1,
      "cuaca_siang_id": 1,
      "cuaca_sore_id": 1,
      "curah_hujan_id": 1,
      "suhu": 10.10 (double),
      "kelembapan": 10.10 (double),
      "kecepatan_angin": 10.10 (double),
      "ffmc_kkas_id": 1 (integer),
      "fwi_id": 1 (unsignedInteger),
      "dc_kk_id": 1 (unsignedInteger),
      "inventori_patroli": [
        {
          "inventori_id": 1 (unsignedInteger)
        }
      ],
      "hotspot": [
        {
          "satelit_id": 1 (unsignedInteger),
          "deskripsi": "lorem ipsum" (text) 
        }
      ],
      "aktivitas_harian_patroli": [
        {
          "aktivitas_harian_id": 1 (unsignedInteger)
        }
      ],
      "anggota_patroli": [
        {
          "anggota_id": 1 (unsignedInteger)
        }
      ],

      // Data spesifik patroli darat
      "aktivitas_masyarakat": "membersihkan lahan dan bercocok tanam" (text),
      "keterangan_lokasi": "akses yg bisa digunakan hanya jalan setapak" (text),
      "hasil_uji": [
        {
          "nama_pengujian": "Uji Remas Daun" (string, 400),
          "hasil": "Daun agak kering" (text)
        }
      ],
      "kondisi_sumber_air": [
        {
          "sumber_air_id": 1 (unsignedInteger),
          "longitude": -1.963555556 (double),
          "latitude": 110.1340833 (double),
          "panjang": 2 (double),
          "lebar": 2 (double),
          "kedalaman": 1.5 (double),
        }
      ],
      "kondisi_vegetasi": [
        {
          "vegetasi_id": 1 (unsignedInteger),
          "kategori_kondisi_vegetasi_id": 1 (unsignedInteger),
          "potensi_karhutla_id": 1 (unsignedInteger),
          "kondisi_karhutla_id": 1 (unsignedInteger),
          "luas_tanah": 3 (double),
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
        }
      ],
      "kondisi_tanah": [
        {
          "tanah_id": 1 (unsignedInteger),
          "potensi_karhutla_id": 1 (unsignedInteger),
          "kondisi_karhutla_id": 1 (unsignedInteger),
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
          "kedalaman_gambut": 1.5 (double)
        }
      ],
      "pemadaman": [
        {
          "longitude": 110.1355278 (double),
          "latitude": -1.992222222 (double)
          "luas_terbakar": 1.5 (double)
        }
      ]
    }
  ```

  * Patroli Udara

  ```
    {
      // Data general
      "kegiatan_patroli_id: 18,
      "tanggal_patroli": "2018-04-06" (date),
      "kategori_patroli_id": 1 (unsignedInteger),
      "jenis_patroli": "UDARA",
      "desa_kelurahan_id": 1079,
      "cuaca_pagi_id": 1,
      "cuaca_siang_id": 1,
      "cuaca_sore_id": 1,
      "curah_hujan_id": 1,
      "suhu": 10.10 (double),
      "kelembapan": 10.10 (double),
      "kecepatan_angin": 10.10 (double),
      "ffmc_kkas_id": 1 (integer),
      "fwi_id": 1 (unsignedInteger),
      "dc_kk_id": 1 (unsignedInteger),
      "Inventori_patroli": [
        {
          "inventori_id": 1 (unsignedInteger)
        }
      ],
      "hotspot": [
        {
          "satelit_id": 1 (unsignedInteger),
          "deskripsi": "lorem ipsum" (text) 
        }
      ],
      "aktivitas_harian_patroli": [
        {
          "aktivitas_harian_id": 1 (unsignedInteger)
        }
      ],
      "anggota_patroli": [
        {
          "anggota_id": 1 (unsignedInteger)
        }
      ],

      // Data spesifik patroli udara
      "latitude": 10.10 (double),
      "longitude": 20.20 (double),
      "confidence": 11.22 (double),
      "distance": 111.21 (double),
      "radial": 2312.21 (double),
      "kegiatan": "lorem ipsum" (text),
      "keterangan": "lorem ipsum" (text),
    }
  ```

* **Success Response**

	```
    {
      "data": "Create laporan kegiatan patroli sukses."
    }
	```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Delete Laporan Patroli**
---

* **URL**

  `{{host}}/api/patroli/delete`

* **Method**

  `POST`

* **Data Param (raw data/payload/json)**

  ```
    {
      "kegiatan_patroli_id": 1
    }
  ```

* **Headers**

  `Authorizaton: Bearer {token}`

* **Success Response**

  ```
    {
      "message": "Delete laporan patorli sukses"
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Kategori Curah Hujan**
---

* **URL**

  `{{host}}/api/curah-hujan/list`

* **Data Params**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "rendah"
        },
        {
          "id": 2,
          "nama": "sedang"
        },
        {
          "id": 3,
          "nama": "tinggi"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Kategori Cuaca**
----

* **URL**

  `{{host}}/api/cuaca/list`

* **Method**

  `GET`

* **Data Params**

  `none`

* **Succes Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "cerah"
        },
        {
          "id": 2,
          "nama": "berawan"
        },
        {
          "id": 3,
          "nama": "mendung"
        },
        {
          "id": 4,
          "nama": "hujan"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Kategori Artifisial Param**
---

* **URL**

  `{{host}}/api/artifisial-param/list`

* **Method**

  `GET`

* **Data Param**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 2,
          "nama": "sedang"
        },
        {
          "id": 3,
          "nama": "tinggi"
        },
        {
          "id": 1,
          "nama": "rendah"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Sumber Air**
----

* **URL**

  `{{host}}/api/sumber-air/list`

* **Method**

  `GET`

* **Data Param**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "name": "parit"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Aktivitas Harian**
----

* **URL**

  `{{host}}/api/aktivitas-harian/list`

* **Method**

  `GET`

* **Headers**

  * `Authorization: Bearer {token}`

* **Data Param**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "Apel pagi dan apel sore"
        },
        {
          "id": 2,
          "nama": "Melengkapi Administrasi patroli mandiri"
        },
        {
          "id": 3,
          "nama": "Pemantauan hospot"
        },
        {
          "id": 4,
          "nama": "IN.HOUSE TRAINIG"
        },
        {
          "id": 5,
          "nama": "Menggrid poto kegiatan dengan mudah dan Praktis"
        },
        {
          "id": 6,
          "nama": "Giat maghrib"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Kategori Anggota**
---

* **URL**

  `{{host}}/api/kategori-anggota/list`

* **Method**

  `GET`

* **Data Param**

  `none`

* **Headers**

  `Authorization: Bearer {token}`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "TNI"
        },
        {
          "id": 2,
          "nama": "Manggala Agni"
        },
        {
          "id": 3,
          "nama": "Masyarakat"
        }
      ]
    }
  ```

**List Anggota**
---

* **URL**

  `{{host}}/api/anggota/list`

* **Method**

  `GET`

* **Data Param**

  `none`

* **Headers**

  `Authorizaton: Bearer {token}`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "Yuni Setianingroom",
          "email": "yuni@gmail.com",
          "no_telepon": "8122334455",
          "kategori_anggota_id": 2
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Create Anggota**
---

* **URL**

  `{{host}}/api/anggota/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (payload/json)**

  ```
    {
      "kategori_anggota_id": 2,
      "nama": "ramdan",
      "email": "mramdanf@gmail.com",
      "no_telepon": "08122334455"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create anggota patroli sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Anggota**
---

* **URL**

  `{{host}}/api/anggota/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (payload/json)**

  ```
    {
      "id": 2
      "kategori_anggota_id": 2,
      "nama": "ramdan",
      "email": "mramdanf@gmail.com",
      "no_telepon": "08122334455"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update anggota patroli sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Anggota**
---

* **URL**

  `{{host}}/api/anggota/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (payload/json)**

  ```
    {
      "id": 2
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete anggota patroli sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Pengguna**
---

* **URL**

  `{{host}}/api/pengguna/list`

* **Method**

  `GET`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 3,
          "nama": "ramdan",
          "email": "ramdan@gmail.com",
          "no_telepon": "081223445566"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Pengguna**
---

* **URL**

  `{{host}}/api/pengguna/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "nama": "rudi",
      "email": "rudi@test.com",
      "password": 111
      
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create pengguna sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Pengguna**
---

* **URL**

  `{{host}}/api/pengguna/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 1
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete pengguna sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Pengguna**
---

* **URL**

  `{{host}}/api/pengguna/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 6,
      "nama": "rudi",
      "email": "rudi@test.com",
      "password": 111
      
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update pengguna sukses."
    }
  ```


<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Provinisi**
---

* **URL**

  `{{host}}/api/provinsi/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "nama": "rudi"
      
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create provinsi sukses."
    }
  ```

* **Error Response**

  * **Code:** 400 HTTP_BAD_REQUEST
  * **Content:**
    ```
      {
        "message": "Create provinsi gagal, Nama provinsi x telah terdaftar."
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Provinisi**
---

* **URL**

  `{{host}}/api/provinsi/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 16
      
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete provinsi sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Provinisi**
---

* **URL**

  `{{host}}/api/provinsi/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 61,
      "nama": "rudi"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update provinsi sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Daops**
---

* **URL**

  `{{host}}/api/daops/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 336,
          "provinsi_id": 54,
          "nama": "ketapang"
        },
        {
          "id": 337,
          "provinsi_id": 54,
          "nama": "pontianak"
        },
      ]
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Daops**
---

* **URL**

  `{{host}}/api/daops/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "provinsi_id": 61,
      "nama": "Purwakarta"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create daops sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Daops**
---

* **URL**

  `{{host}}/api/daops/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 468,
      "provinsi_id": 61,
      "nama": "Purwakarta"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update daops sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Daops**
---

* **URL**

  `{{host}}/api/daops/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 468
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete daops sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Kotakab**
---

* **URL**

  `{{host}}/api/kotakab/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 253,
          "daops_id": 337,
          "nama": "kubu raya"
        },
        {
          "id": 254,
          "daops_id": 343,
          "nama": "banyuasin"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Kotakab**
---

* **URL**

  `{{host}}/api/kotakab/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "daops_id": 336,
      "nama": "testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create daops sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Kotakab**
---

* **URL**

  `{{host}}/api/kotakab/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360,
      "daops_id": 336,
      "nama": "testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update kota kab sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Kotakab**
---

* **URL**

  `{{host}}/api/kotakab/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete kota kab sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Kecamatan**
---

* **URL**

  `{{host}}/api/kecamatan/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 580,
          "kota_kab_id": null,
          "nama": "kendawangan"
        },
        {
          "id": 581,
          "kota_kab_id": null,
          "nama": "muara pawan"
        },
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Kecamatan**
---

* **URL**

  `{{host}}/api/kecamatan/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "kota_kab_id": 336,
      "nama": "kecamatan testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create kecamatan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Kecamatan**
---

* **URL**

  `{{host}}/api/kecamatan/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360,
      "kota_kab_id": 336,
      "nama": "testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update kecamatan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Kecamatan**
---

* **URL**

  `{{host}}/api/kecamatan/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete kecamatan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Posko**
---

* **URL**

  `{{host}}/api/posko/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 580,
          "kecamatan_id": null,
          "nama": "kendawangan"
        },
        {
          "id": 581,
          "kecamatan_id": null,
          "nama": "muara pawan"
        },
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Kecamatan**
---

* **URL**

  `{{host}}/api/kecamatan/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "kecamatan_id": 336,
      "nama": "posko testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create posko sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Posko**
---

* **URL**

  `{{host}}/api/posko/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360,
      "kecamatan_id": 336,
      "nama": "testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update posko sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Posko**
---

* **URL**

  `{{host}}/api/posko/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete posko sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

