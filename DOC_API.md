# Dokumentasi API Siavipala

## Table of Contents
- [Login](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#login)
- [Kategori Curah Hujan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-curah-hujan)
- [Kategori Cuaca](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-cuaca)
- [Kategori Artifisial Param](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-artifisial-param)
- [Sumber Air](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#sumber-air)
- [Aktivitas Harian](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#aktivitas-harian)
- [Tipe Kebakaran](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#tipe-kebakaran)
- [Pemilik Lahan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#pemilik-lahan)
- [Inventori Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#inventori-patroli)
- [Tanah](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-tanah)
- [Vegetasi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-vegetasi)
- [Satelit](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-satelit)
- [Tipe Kebakaran](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-tipe-kebakaran)
- [Kategori Kondisi Vegetasi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kategori-kondisi-vegetasi)
- [Kategori Potensi Karhutla](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-potensi-karhutla)
- [Kategori Kondisi Karhutla](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-kondisi-karhutla)
- [Keterangan Lokasi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#keterangan-lokasi)
- [Hotspot Sipongi Date Range](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#hotspot-sipongi-date-range)
- Patroli
  - [List Kegiatan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kegiatan-patroli)
  - [Kategori Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#kategori-patroli)
  - [Create Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-laporan-patroli)
  - [Update Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-laporan-patroli)
  - [Delete Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-laporan-patroli)
  - [Unduh Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#unduh-laporan-patroli)
  - [Unduh Rekapitulasi Laporan Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#unduh-rekapitulasi-laporan-patroli)
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
  - [Resume Provinsi](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#resume-provinsi)
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
- Desa Kelurahan
  - [List Desa Kelurahan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-desa-kelurahan)
  - [Create Desa Kelurahan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-desa-kelurahan)
  - [Update Desa Kelurahan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-desa-kelurahan)
  - [Delete Desa Kelurahan](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-desa-kelurahan)
- Role
  - [List Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-role)
  - [Create Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-role)
  - [Update Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-role)
  - [Delete Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-role)
- Permission
  - [List Permission](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-permission)
  - [Create Permission](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-permission)
  - [Update Permission](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-permission)
  - [Delete Permission](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-permission)
- Role User
  - [List Role User](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-role-user)
  - [Assign Role to User](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#assign-role-to-user)
  - [Unassign Role from User](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#unassign-role-from-user)
- Permission Role
  - [List Permissiion Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-permission-role)
  - [Assign Permission to Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#assign-permission-to-role)
  - [Unassign Permission from Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#unassign-permission-from-role)
- Navigation Menu
  - [List Navigation Menu](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-navigation-menu)
  - [Create Navigation Menu](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#create-navigation-menu)
  - [Update Navigation Menu](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#update-navigation-menu)
  - [Delete Navigation Menu](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#delete-navigation-menu)
- Role Navigation Menu
  - [List Role Navigation Menu](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-role-navigation-menu)
  - [Assign Navigation Menu to Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#assign-navigation-menu-to-role)
  - [Unassign Navigation Menu from Role](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#unassign-navigation-menu-from-role)

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
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3Qvc2lhdmlwYWxhL3B1YmxpYy9hcGkvYXV0aC9sb2dpbiIsImlhdCI6MTU0NDk5OTU1OSwiZXhwIjoxNTQ1MDIxMTU5LCJuYmYiOjE1NDQ5OTk1NTksImp0aSI6Inp5STFjVkQ1YXpGT3U0Y3kifQ.actfiDrE__TKBH8M-7oNAYkkjErRSEmZaGv32FI2hkA",
        "user": [
            {
                "id": 3,
                "nama": "ramdan",
                "email": "ramdan@gmail.com",
                "role_user": [
                    {
                        "pengguna_id": 3,
                        "role_id": 28,
                        "role": {
                            "id": 28,
                            "name": "administrator",
                            "display_name": "Administrator",
                            "description": null,
                            "role_navigation_menu": []
                        }
                    }
                ]
            }
        ]
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

  * `tanggal_patroli: yyyy-mm-dd (opsional)`

* **Success Response**

	```
	Responsenya panjang bgt, langsung dicoba aja dipostman atau di browser langsung.
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

  ```
  {
    "tanggal_patroli": "2018-04-10",
    "kategori_patroli_id": 1,
    "inventori_patroli": [
      {
      "inventori_id": 2,
      "jumlah_unit": 2
      }
    ],
    "hotspot": [
      {
        "satelit_id": 1,
        "deskripsi": "NIHIL"
      }
    ],
    "aktivitas_harian_patroli": [
      {
        "aktivitas_harian_id": 1
      }
    ],
    "anggota_patroli": [
      {
        "anggota_id": 1
      }
    ],
    "images": [
      "base64"
    ],
    "patroli_darat": [
      {
        "desa_kelurahan_id": 1079,
        "cuaca_pagi_id": 1,
        "cuaca_siang_id": 1,
        "cuaca_sore_id": 1,
        "curah_hujan_id": 1,
        "potensi_karhutla_id": 1,
        "kondisi_karhutla_id": 1,
        "ffmc_kkas_id": 1,
        "fwi_id": 1,
        "dc_kk_id": 1,
        "keterangan_lokasi_id": 1,
        "suhu": 10.10,
        "kelembaban": 11.10,
        "kecepatan_angin": 12.10,
        "latitude": -1.999756,
        "longitude": 23.56543,
        "aktivitas_masyarakat": "membersihkan lahan dan bercocok tanam",
        "hasil_uji": [
          {
            "nama_pengujian": "Uji Remas Daun",
            "hasil": "Daun agak kering"
          }
        ],
        "kondisi_sumber_air": [
            {
              "sumber_air_id": 1,
              "longitude": -1.963555556,
              "latitude": 110.1340833,
              "panjang": 2,
              "lebar": 2,
              "kedalaman": 1.5
            }
          ],
          "kondisi_vegetasi": [
            {
              "vegetasi_id": 1,
              "kategori_kondisi_vegetasi_id": 1,
              "luas_tanah": 3,
              "longitude": 110.1355278,
              "latitude": -1.992222222
            }
          ],
          "kondisi_tanah": [
            {
              "tanah_id": 1,
              "longitude": 110.1355278,
              "latitude": -1.992222222,
              "kedalaman_gambut": 1.5,
              "luas": 0
            }
          ],
          "pemadaman": [
            {
              "longitude": 110.1355278,
              "latitude": -1.992222222,
              "luas_terbakar": 1.5,
              "luas_dipadamkan": 1,
              "hasil_pemadaman": "Berhasil dipadamkan",
              "tipe_kebakaran_id": 1,
              "pemilik_lahan_id": 3
            }
          ]
        }
      ],
      "patroli_udara": [
        {
          "desa_kelurahan_id": 1079,
          "cuaca_pagi_id": 1,
          "cuaca_siang_id": 1,
          "cuaca_sore_id": 1,
          "curah_hujan_id": 1,
          "suhu": 10.10,
          "kelembaban": 11.10,
          "kecepatan_angin": 12.10,
          "ffmc_kkas_id": 1,
          "fwi_id": 1,
          "dc_kk_id": 1,
          "latitude": 10.10,
          "longitude": 20.20,
          "confidence": 112,
          "distance": 111,
          "radial": 2312,
          "kegiatan": "lorem ipsum",
          "keterangan": "lorem ipsum"
        }
      ]
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

  ```
    {
      "kegiatan_patroli_id": 24,
      "tanggal_patroli": "2018-04-10",
      "kategori_patroli_id": 1,
      "inventori_patroli": [
        {
        "inventori_id": 2,
        "jumlah_unit": 2
        }
      ],
      "hotspot": [
        {
          "satelit_id": 1,
          "deskripsi": "NIHIL"
        }
      ],
      "aktivitas_harian_patroli": [
        {
          "aktivitas_harian_id": 1
        }
      ],
      "anggota_patroli": [
        {
          "anggota_id": 1
        }
      ],
      "images": [
        "base64"
      ],
      "patroli_darat": [
        {
          "desa_kelurahan_id": 1079,
          "cuaca_pagi_id": 1,
          "cuaca_siang_id": 1,
          "cuaca_sore_id": 1,
          "curah_hujan_id": 1,
          "suhu": 10.10,
          "kelembaban": 11.10,
          "kecepatan_angin": 12.10,
          "ffmc_kkas_id": 1,
          "fwi_id": 1,
          "dc_kk_id": 1,
          "aktivitas_masyarakat": "membersihkan lahan dan bercocok tanam",
          "keterangan_lokasi": "akses yg bisa digunakan hanya jalan setapak",
          "hasil_uji": [
            {
              "nama_pengujian": "Uji Remas Daun",
              "hasil": "Daun agak kering"
            }
          ],
          "kondisi_sumber_air": [
              {
                "sumber_air_id": 1,
                "longitude": -1.963555556,
                "latitude": 110.1340833,
                "panjang": 2,
                "lebar": 2,
                "kedalaman": 1.5
              }
            ],
            "kondisi_vegetasi": [
              {
                "vegetasi_id": 1,
                "kategori_kondisi_vegetasi_id": 1,
                "potensi_karhutla_id": 1,
                "kondisi_karhutla_id": 1,
                "luas_tanah": 3,
                "longitude": 110.1355278,
                "latitude": -1.992222222
              }
            ],
            "kondisi_tanah": [
              {
                "tanah_id": 1,
                "potensi_karhutla_id": 1,
                "kondisi_karhutla_id": 1,
                "longitude": 110.1355278,
                "latitude": -1.992222222,
                "kedalaman_gambut": 1.5,
                "luas": 0
              }
            ],
            "pemadaman": [
              {
                "longitude": 110.1355278,
                "latitude": -1.992222222,
                "luas_terbakar": 1.5
              }
            ]
          }
        ],
        "patroli_udara": [
          {
            "desa_kelurahan_id": 1079,
            "cuaca_pagi_id": 1,
            "cuaca_siang_id": 1,
            "cuaca_sore_id": 1,
            "curah_hujan_id": 1,
            "suhu": 10.10,
            "kelembaban": 11.10,
            "kecepatan_angin": 12.10,
            "ffmc_kkas_id": 1,
            "fwi_id": 1,
            "dc_kk_id": 1,
            "latitude": 10.10,
            "longitude": 20.20,
            "confidence": 112,
            "distance": 111,
            "radial": 2312,
            "kegiatan": "lorem ipsum",
            "keterangan": "lorem ipsum"
          }
        ]
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

**Unduh Laporan Patroli**
---

* **URL**

  `{{host}}/api/patroli/unduh-laporan`

* **Method**

  `GET`

* **GET Param**

  - `tanggal: tanggal patroli (yyyy-mm-dd)`
  - `daops: id daops`
  - `load: pdf`

* **Headers**

  `Authorizaton: Bearer {token}`

* **Success Response**

  ```
    download pdf
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Unduh Rekapitulasi Laporan Patroli**
---

* **URL**

  `{{host}}/api/patroli/unduh-rekapitulasi-laporan`

* **Method**

  `GET`

* **GET Param**

  - `tanggal: tanggal patroli (yyyy-mm-dd)`
  - `provinsi_id`
  - `load: pdf`

* **Headers**

  `Authorizaton: Bearer {token}`

* **Success Response**

  ```
    download pdf
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Kategori Curah Hujan**
---

* **URL**

  `{{host}}/api/curah-hujan/list`

* **Method**

  `GET`

* **Data Params**

  * `key: search key (opsional)`

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

  * `key: search key (opsional)`

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

  * `key: search key (opsional)`

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

  * `key: search key (opsional)`

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

* **Data Param**

  * `key: search key (opsional)`

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


**Tipe Kebakaran**
----

* **URL**

  `{{host}}/api/tipe-kebakaran/list`

* **Method**

  `GET`

* **Headers**

  * `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
        {
            "id": 1,
            "nama": "Bawah"
        },
        {
            "id": 2,
            "nama": "Atas"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Pemilik Lahan**
----

* **URL**

  `{{host}}/api/pemilik-lahan/list`

* **Method**

  `GET`

* **Headers**

  * `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
        {
          "id": 1,
          "nama": "ramdan"
        },
        {
          "id": 2,
          "nama": "dhani"
        },
        {
          "id": 3,
          "nama": "deny"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Inventori Patorli**
----

* **URL**

  `{{host}}/api/inventori-patroli/list`

* **Method**

  `GET`

* **Headers**

  * `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 2,
              "nama": "Mobil Triton"
          },
          {
              "id": 3,
              "nama": "Motor KLX"
          },
          {
              "id": 4,
              "nama": "Motor Viar"
          },
          {
              "id": 5,
              "nama": "Mesin Max"
          }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Tanah**
----

* **URL**

  `{{host}}/api/tanah/list`

* **Method**

  `GET`

* **Headers**

  * `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 1,
              "nama": "gambut"
          }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Vegetasi**
----

* **URL**

  `{{host}}/api/vegetasi/list`

* **Method**

  `GET`

* **Headers**

  * `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 1,
              "nama": "ilalang"
          },
          {
              "id": 2,
              "nama": "palawija"
          },
          {
              "id": 3,
              "nama": "semak belukar"
          },
          {
              "id": 4,
              "nama": "pakis"
          },
          {
              "id": 5,
              "nama": "galam"
          },
          {
              "id": 6,
              "nama": "sempuk"
          }
      ]
  }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Satelit**
----

* **URL**

  `{{host}}/api/satelit/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 1,
              "nama": "noa 18"
          },
          {
              "id": 2,
              "nama": "terra/aqua"
          }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Tipe Kebakaran**
----

* **URL**

  `{{host}}/api/tipe-kebakaran/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 1,
              "nama": "Bawah"
          },
          {
              "id": 2,
              "nama": "Atas"
          }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Kategori Kondisi Vegetasi**
----

* **URL**

  `{{host}}/api/kategori-kondisi-vegetasi/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
          {
              "id": 1,
              "nama": "kering"
          },
          {
              "id": 2,
              "nama": "basah"
          }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Kategori Potensi Karhutla**
----

* **URL**

  `{{host}}/api/potensi-karhutla/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

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

**Kategori Kondisi Karhutla**
----

* **URL**

  `{{host}}/api/kondisi-karhutla/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
        {
            "id": 1,
            "nama": "rawan karhutla"
        },
        {
            "id": 2,
            "nama": "bekas karhutla"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Keterangan Lokasi**
----

* **URL**

  `{{host}}/api/keterangan-lokasi/list`

* **Method**

  `GET`

* **Headers**

  `none`

* **Data Param**

  * `key: search key (opsional)`

* **Success Response**

  ```
    {
      "data": [
        {
            "id": 1,
            "nama": "Lokasi konsentrasi penduduk"
        },
        {
            "id": 2,
            "nama": "akses yg bisa digunakan hanya jalan setapak"
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Hotspot Sipongi Date Range**
----

* **URL**

  `{{host}}/api/hotspot-sipongi/date-range`

* **Method**

  `GET`

* **Headers**

  * `None`

* **Data Param**

  * `start_date (required): YYYY-MM-DD`
  * `end_date (required): YYYY-MM-DD`

* **Success Response**

  ```
    {
      "hostspot_sipongi": [
        {
          "id": 19,
          "tanggal": "2018-11-16",
          "sebaran_hotspot_count": 52
        },
        {
          "id": 20,
          "tanggal": "2018-11-17",
          "sebaran_hotspot_count": 23
        },
        {
          "id": 21,
          "tanggal": "2018-11-19",
          "sebaran_hotspot_count": 0
        },
        {
          "id": 22,
          "tanggal": "2018-11-20",
          "sebaran_hotspot_count": 6
        },
        {
          "id": 23,
          "tanggal": "2018-11-22",
          "sebaran_hotspot_count": 0
        },
        {
          "id": 24,
          "tanggal": "2018-11-23",
          "sebaran_hotspot_count": 0
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


**Create Provinsi**
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

  * **Code:** 
    
    `400 HTTP_BAD_REQUEST`

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


**Create Posko**
---

* **URL**

  `{{host}}/api/posko/create`

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

**List Desa Kelurahan**
---

* **URL**

  `{{host}}/api/desakelurahan/list`

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
          "kecamatan_id": 1,
          "posko_id": 1,
          "nama": "kendawangan"
        },
        {
          "id": 581,
          "kecamatan_id": 2,
          "posko_id": 1,
          "nama": "muara pawan"
        },
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Desa Kelurahan**
---

* **URL**

  `{{host}}/api/posko/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "kecamatan_id": 2,
      "posko_id": 2,
      "nama": "desa kelurahan testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create desa kelurahan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Desa Kelurahan**
---

* **URL**

  `{{host}}/api/desakelurahan/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 3360,
      "kecamatan_id": 1,
      "posko_id": 2,
      "nama": "testing"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update desa kelurahan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Desa Kelurahan**
---

* **URL**

  `{{host}}/api/desakelurahan/delete`

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
      "message": "Delete desa kelurahan sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Role**
---

* **URL**

  `{{host}}/api/role/list`

* **Method**

  `GET`

* **Headers**

  * `Authorization: Bearer {Token}`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "roles": [
        {
          "id": 26,
          "name": "pengguna_terdaftar",
          "display_name": "Pengguna Terdaftar",
          "description": null
        },
        {
          "id": 27,
          "name": "tim_patroli",
          "display_name": "Tim Patroli",
          "description": null
        },
        {
          "id": 28,
          "name": "administrator",
          "display_name": "Administrator",
          "description": null
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Role**
---

* **URL**

  `{{host}}/api/role/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "name": "testing",
      "display_name": "test",
      "description": "test"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create role success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Role**
---

* **URL**

  `{{host}}/api/role/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 29,
      "name": "testong",
      "display_name": "testx",
      "description": "testx"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update role success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Role**
---

* **URL**

  `{{host}}/api/role/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 29
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete role sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Permisson**
---

* **URL**

  `{{host}}/api/permission/list`

* **Method**

  `GET`

* **Headers**

  * `Authorization: Bearer {Token}`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
    "data": [
        {
            "id": 84,
            "name": "patroli-unduh-laporan",
            "display_name": "Patroli Unduh Laporan",
            "description": null
        },
        {
            "id": 85,
            "name": "patroli-create",
            "display_name": "Patroli Create",
            "description": null
        },
        {
            "id": 86,
            "name": "patroli-update",
            "display_name": "Patroli Update",
            "description": null
        }
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Permisson**
---

* **URL**

  `{{host}}/api/permission/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "name": "testing",
      "display_name": "test",
      "description": "test"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create permission success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Permisson**
---

* **URL**

  `{{host}}/api/role/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 29,
      "name": "testong",
      "display_name": "testx",
      "description": "testx"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update permission success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Permisson**
---

* **URL**

  `{{host}}/api/permission/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 29
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete permission success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Role User**
---

  * **URL**
  
    `{host}/api/role-user/list`

  * **Method**

    `GET`

  * **Get Params**

    `none`

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "roles": [
          {
              "id": 26,
              "name": "pengguna_terdaftar",
              "display_name": "Pengguna Terdaftar",
              "description": null,
              "role_user": [
                  {
                      "pengguna_id": 6,
                      "role_id": 26,
                      "pengguna": {
                          "id": 6,
                          "nama": "rudi",
                          "email": "rudi@gmail.com"
                      }
                  }
              ]
          }
        ]
      }
    ```
    
<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Assign Role to User**
---

  * **URL**
  
    `{host}/api/role-user/assign-role-user`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "pengguna_id": 3,
        "role_id": 27
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Assign role to user success.",
        "user": {
            "id": 3,
            "nama": "ramdan",
            "email": "ramdan@gmail.com",
            "role_user": [
                {
                    "pengguna_id": 3,
                    "role_id": 28,
                    "role": {
                        "id": 28,
                        "name": "administrator",
                        "display_name": "Administrator",
                        "description": null
                    }
                },
                {
                    "pengguna_id": 3,
                    "role_id": 26,
                    "role": {
                        "id": 26,
                        "name": "pengguna_terdaftar",
                        "display_name": "Pengguna Terdaftar",
                        "description": null
                    }
                }
            ]
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Unassign Role from User**
---

  * **URL**
  
    `{host}/api/role-user/unassign-role-user`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "pengguna_id": 3,
        "role_id": 27
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Assign role to user success.",
        "user": {
            "id": 3,
            "nama": "ramdan",
            "email": "ramdan@gmail.com",
            "role_user": [
                {
                    "pengguna_id": 3,
                    "role_id": 28,
                    "role": {
                        "id": 28,
                        "name": "administrator",
                        "display_name": "Administrator",
                        "description": null
                    }
                }
            ]
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**List Permission Role**
---

  * **URL**
  
    `{host}/api/permission-role/list`

  * **Method**

    `GET`

  * **Get Params**

    `none`

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "roles": [
          {
              "id": 26,
              "name": "pengguna_terdaftar",
              "display_name": "Pengguna Terdaftar",
              "description": null,
              "permission_role": [
                  {
                      "permission_id": 84,
                      "role_id": 26,
                      "permission": {
                          "id": 84,
                          "name": "patroli-unduh-laporan",
                          "display_name": "Patroli Unduh Laporan",
                          "description": null
                      }
                  },
                  {
                      "permission_id": 112,
                      "role_id": 26,
                      "permission": {
                          "id": 112,
                          "name": "patroli-unduh-rekapitulasi-laporan",
                          "display_name": "Patroli Unduh Rekapitulasi Laporan",
                          "description": null
                      }
                  },
                  {
                      "permission_id": 85,
                      "role_id": 26,
                      "permission": {
                          "id": 85,
                          "name": "patroli-create",
                          "display_name": "Patroli Create",
                          "description": null
                      }
                  }
              ]
          }
        ]
      }
    ```
    
<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Assign Permissiion to Role**
---

  * **URL**
  
    `{host}/api/permission-role/assign-permission-role`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "permission_id": 85,
        "role_id": 26
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Attach permission to role success",
        "role": {
            "id": 26,
            "name": "pengguna_terdaftar",
            "display_name": "Pengguna Terdaftar",
            "description": null,
            "permission_role": [
                {
                    "permission_id": 84,
                    "role_id": 26,
                    "permission": {
                        "id": 84,
                        "name": "patroli-unduh-laporan",
                        "display_name": "Patroli Unduh Laporan",
                        "description": null
                    }
                },
                {
                    "permission_id": 85,
                    "role_id": 26,
                    "permission": {
                        "id": 85,
                        "name": "patroli-create",
                        "display_name": "Patroli Create",
                        "description": null
                    }
                },
                {
                    "permission_id": 112,
                    "role_id": 26,
                    "permission": {
                        "id": 112,
                        "name": "patroli-unduh-rekapitulasi-laporan",
                        "display_name": "Patroli Unduh Rekapitulasi Laporan",
                        "description": null
                    }
                }
            ]
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Unassign Permission from Role**
---

  * **URL**
  
    `{host}/api/permission-role/unassign-permission-role`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "permission_id": 85,
        "role_id": 26
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Unassign permission from role success",
        "role": {
          "id": 26,
          "name": "pengguna_terdaftar",
          "display_name": "Pengguna Terdaftar",
          "description": null,
          "permission_role": [
            {
              "permission_id": 84,
              "role_id": 26,
              "permission": {
                "id": 84,
                "name": "patroli-unduh-laporan",
                "display_name": "Patroli Unduh Laporan",
                "description": null
              }
            },
            {
              "permission_id": 112,
              "role_id": 26,
              "permission": {
                "id": 112,
                "name": "patroli-unduh-rekapitulasi-laporan",
                "display_name": "Patroli Unduh Rekapitulasi Laporan",
                "description": null
              }
            }
          ]
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>




**List Navigation Menu**
---

* **URL**

  `{{host}}/api/navigation-menu/list`

* **Method**

  `GET`

* **Headers**

  * `Authorization: Bearer {Token}`

* **Data Params (json/payload)**

  `none`

* **Success Response**

  ```
    {
      "data": [
        {
            "id": 12,
            "name": "sipongi-live-update",
            "display_name": "Sipongi Live Update",
            "link": null
        },
        {
            "id": 13,
            "name": "patroli-hari-ini",
            "display_name": "Patroli Hari Ini",
            "link": null
        }
      ]
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Create Navigation Menu**
---

* **URL**

  `{{host}}/api/role/create`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "name": "testing",
      "display_name": "test",
      "link": "test"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Create navigation menu success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Update Navigation Menu**
---

* **URL**

  `{{host}}/api/role/update`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 1,
      "name": "testing",
      "display_name": "test",
      "link": "test"
    }
  ```

* **Success Response**

  ```
    {
      "message": "Update navigation menu success."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>


**Delete Navigation Menu**
---

* **URL**

  `{{host}}/api/navigation-menu/delete`

* **Method**

  `POST`

* **Headers**

  `Authorization: Bearer {token}`

* **Data Params (json/payload)**

  ```
    {
      "id": 29
    }
  ```

* **Success Response**

  ```
    {
      "message": "Delete navigation menu sukses."
    }
  ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**List Role Navigation Menu**
---

  * **URL**
  
    `{host}/api/role-navigation-menu/list`

  * **Method**

    `GET`

  * **Get Params**

    `none`

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "roles": [
          {
            "id": 28,
            "name": "administrator",
            "display_name": "Administrator",
            "description": null,
            "role_navigation_menu": [
                {
                    "id": 3,
                    "role_id": 28,
                    "navigation_menu_id": 16,
                    "navigation_menu": {
                        "id": 16,
                        "name": "manajemen-tim-patroli",
                        "display_name": "Manajemen Tim Patroli",
                        "link": null
                    }
                }
            ]
          },
          {
            "id": 26,
            "name": "pengguna_terdaftar",
            "display_name": "Pengguna Terdaftar",
            "description": null,
            "role_navigation_menu": [
                {
                    "id": 2,
                    "role_id": 26,
                    "navigation_menu_id": 15,
                    "navigation_menu": {
                        "id": 15,
                        "name": "rekapitulasi-patroli",
                        "display_name": "Rekapitulasi Patroli",
                        "link": null
                    }
                }
            ]
          }
        ]
      }
    ```
    
<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Assign Navigation Menu to Role**
---

  * **URL**
  
    `{host}/api/role-navigation-menu/assign-navigation-menu-role`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "role_id": 28,
        "navigation_menu_id": 16
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Assing navigation menu to role success.",
        "role": {
          "id": 28,
          "name": "administrator",
          "display_name": "Administrator",
          "description": null,
          "role_navigation_menu": [
              {
                  "id": 4,
                  "role_id": 28,
                  "navigation_menu_id": 16,
                  "navigation_menu": {
                      "id": 16,
                      "name": "manajemen-tim-patroli",
                      "display_name": "Manajemen Tim Patroli",
                      "link": null
                  }
              }
          ]
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>

**Unassign Navigation Menu from Role**
---

  * **URL**
  
    `{host}/api/permission-role/unassign-permission-role`

  * **Method**

    `POST`

  * **Payload**

    ```
      {
        "role_id": 28,
        "navigation_menu_id": 16
      }
    ```

  * **Headers**

    * `Authorzation: Bearer {Token}`

  * **Success Response**
    ```
      {
        "message": "Unassign navigation menu from role success.",
        "role": {
            "id": 28,
            "name": "administrator",
            "display_name": "Administrator",
            "description": null,
            "role_navigation_menu": []
        }
      }
    ```

<div align="right">
    <b><a href="https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#dokumentasi-api-siavipala">↥ back to top</a></b>
</div>
