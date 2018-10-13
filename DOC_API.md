# Dokumentasi API Siavipala

## Table of Contents
- [Login](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#login)
- [List Kegiatan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kegiatan-patroli)
- [List Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-provinsi)
- [Resume Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#resume-provinsi)
- [Kategori Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-patroli)
- [Create Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-laporan-patroli)

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

* **Data Params (Raw data/payload/json)**

  * Patroli Darat

  ```javascript
    {
      "tanggal_patroli": "2018-04-06" (date),
      "kategori_patroli_id": 1 (unsignedInteger),
      "aktivitas_masyarakat": "membersihkan lahan dan bercocok tanam" (text),
      "keterangan_lokasi": "akses yg bisa digunakan hanya jalan setapak" (text),
      "early_warning_system": {
        "suhu": 10.10 (double),
        "kelembapan": 10.10 (double),
        "kecepatan_angin": 10.10 (double),
        "ffmc_kkas_id": 1 (integer),
        "fwi_id": 1 (unsignedInteger),
        "dc_kk_id": 1 (unsignedInteger),
      },
      "hasil_uji": [
        {
          "nama_pengujian": "Uji Remas Daun" (string, 400),
          "hasil": "Daun agak kering" (text)
        }
      ],
      ""

    }
  ```

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