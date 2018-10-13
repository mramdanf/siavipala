# Dokumentasi API Siavipala

## Table of Contents
- [Login](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#login)
- [List Patroli](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#list-kegiatan-patroli)

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