# Dokumentasi API Siavipala

## Table of Contents
- [Login](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md#login)

**Login**
----
Login

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

**List Kegiatan Patroli**
----
Login

* **URL**

  `{{host}}/api/patroli/list`

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
            "kategori_patroli_id": null,
            "tanggal_patroli": "2016-02-24",
            "created_at": null,
            "updated_at": null,
            "patroli_darat": [
                {
                    "id": 12203,
                    "kegiatan_patroli_id": 1,
                    "desa_kelurahan_id": 1079,
                    "suhu": null,
                    "kelembaban": null,
                    "kecepatan_angin": null,
                    "dc_kk": null,
                    "ffmc_kkas": null,
                    "fwi": null,
                    "aktivitas_masyarakat": null,
                    "keterangan_lokasi": null,
                    "created_at": null,
                    "updated_at": null,
                    "cuaca_pagi_id": null,
                    "cuaca_sore_id": null,
                    "cuaca_siang_id": null,
                    "curah_hujan_id": null,
                    "kondisi_vegetasi": [
                        {
                            "id": 7,
                            "patroli_darat_id": 12203,
                            "vegetasi_id": 1,
                            "latitude": "-1.992222222",
                            "longitude": "110.1355278",
                            "created_at": null,
                            "updated_at": null,
                            "kategori_kondisi_vegetasi_id": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "luas_tanah": null,
                            "vegetasi": {
                                "id": 1,
                                "nama": "ilalang",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kategori_kondisi_vegetasi": null,
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        }
                    ],
                    "kondisi_tanah": [],
                    "kondisi_sumber_air": [
                        {
                            "id": 8,
                            "patroli_darat_id": 12203,
                            "sumber_air_id": 1,
                            "latitude": "-1.963555556",
                            "longitude": "110.1340833",
                            "panjang": "0",
                            "lebar": "3",
                            "kedalaman": "1.5",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        },
                        {
                            "id": 9,
                            "patroli_darat_id": 12203,
                            "sumber_air_id": 1,
                            "latitude": "-1.992166667",
                            "longitude": "110.1356389",
                            "panjang": "0",
                            "lebar": "3",
                            "kedalaman": "1.5",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        }
                    ],
                    "desa_kelurahan": {
                        "id": 1079,
                        "posko_id": null,
                        "nama": "sungai pelang",
                        "created_at": null,
                        "updated_at": null,
                        "kecamatan_id": 576,
                        "kecamatan": {
                            "id": 576,
                            "kota_kab_id": 265,
                            "nama": "matan hilir selatan",
                            "created_at": null,
                            "updated_at": null,
                            "kotakab": {
                                "id": 265,
                                "daops_id": 336,
                                "nama": "ketapang",
                                "created_at": null,
                                "updated_at": null,
                                "daops": {
                                    "id": 336,
                                    "provinsi_id": 54,
                                    "nama": "ketapang",
                                    "created_at": null,
                                    "updated_at": null,
                                    "provinsi": {
                                        "id": 54,
                                        "nama": "Kalimantan Barat",
                                        "created_at": null,
                                        "updated_at": null
                                    }
                                }
                            }
                        }
                    },
                    "curah_hujan": null,
                    "cuaca_pagi": null,
                    "cuaca_siang": null,
                    "cuaca_sore": null
                },
                {
                    "id": 12204,
                    "kegiatan_patroli_id": 1,
                    "desa_kelurahan_id": 1080,
                    "suhu": null,
                    "kelembaban": null,
                    "kecepatan_angin": null,
                    "dc_kk": null,
                    "ffmc_kkas": null,
                    "fwi": null,
                    "aktivitas_masyarakat": null,
                    "keterangan_lokasi": null,
                    "created_at": null,
                    "updated_at": null,
                    "cuaca_pagi_id": null,
                    "cuaca_sore_id": null,
                    "cuaca_siang_id": null,
                    "curah_hujan_id": null,
                    "kondisi_vegetasi": [
                        {
                            "id": 8,
                            "patroli_darat_id": 12204,
                            "vegetasi_id": 2,
                            "latitude": "-0.282027778",
                            "longitude": "109.3404167",
                            "created_at": null,
                            "updated_at": null,
                            "kategori_kondisi_vegetasi_id": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 2,
                            "luas_tanah": null,
                            "vegetasi": {
                                "id": 2,
                                "nama": "palawija",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kategori_kondisi_vegetasi": null,
                            "kondisi_karhutla": {
                                "id": 2,
                                "nama": "bekas karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 9,
                            "patroli_darat_id": 12204,
                            "vegetasi_id": 3,
                            "latitude": "-0.273694444",
                            "longitude": "109.3403889",
                            "created_at": null,
                            "updated_at": null,
                            "kategori_kondisi_vegetasi_id": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "luas_tanah": null,
                            "vegetasi": {
                                "id": 3,
                                "nama": "semak belukar",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kategori_kondisi_vegetasi": null,
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 12,
                            "patroli_darat_id": 12204,
                            "vegetasi_id": 4,
                            "latitude": "-0.273694444",
                            "longitude": "109.3403889",
                            "created_at": null,
                            "updated_at": null,
                            "kategori_kondisi_vegetasi_id": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "luas_tanah": null,
                            "vegetasi": {
                                "id": 4,
                                "nama": "pakis",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kategori_kondisi_vegetasi": null,
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 13,
                            "patroli_darat_id": 12204,
                            "vegetasi_id": 3,
                            "latitude": "-0.266055556",
                            "longitude": "109.3440833",
                            "created_at": null,
                            "updated_at": null,
                            "kategori_kondisi_vegetasi_id": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "luas_tanah": null,
                            "vegetasi": {
                                "id": 3,
                                "nama": "semak belukar",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kategori_kondisi_vegetasi": null,
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        }
                    ],
                    "kondisi_tanah": [
                        {
                            "id": 4,
                            "patroli_darat_id": 12204,
                            "tanah_id": 1,
                            "latitude": "-0.282027778",
                            "longitude": "109.3404167",
                            "luas": "1.5",
                            "kedalaman_gambut": "1",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 2,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": {
                                "id": 2,
                                "nama": "bekas karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 6,
                            "patroli_darat_id": 12204,
                            "tanah_id": 1,
                            "latitude": "-0.273694444",
                            "longitude": "109.3403889",
                            "luas": "50",
                            "kedalaman_gambut": "0",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 2,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": {
                                "id": 2,
                                "nama": "bekas karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 8,
                            "patroli_darat_id": 12204,
                            "tanah_id": 1,
                            "latitude": "-0.269944444",
                            "longitude": "109.3392222",
                            "luas": "3",
                            "kedalaman_gambut": "0",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 9,
                            "patroli_darat_id": 12204,
                            "tanah_id": 1,
                            "latitude": "-0.266055556",
                            "longitude": "109.3440833",
                            "luas": "1.5",
                            "kedalaman_gambut": "0",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 1,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": {
                                "id": 1,
                                "nama": "rawan karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        },
                        {
                            "id": 12,
                            "patroli_darat_id": 12204,
                            "tanah_id": 1,
                            "latitude": "-0.26925",
                            "longitude": "109.33975",
                            "luas": "0",
                            "kedalaman_gambut": "0",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": 2,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": {
                                "id": 2,
                                "nama": "bekas karhutla",
                                "created_at": null,
                                "updated_at": null
                            },
                            "potensi_karhutla": null
                        }
                    ],
                    "kondisi_sumber_air": [
                        {
                            "id": 10,
                            "patroli_darat_id": 12204,
                            "sumber_air_id": 1,
                            "latitude": "-0.282027778",
                            "longitude": "109.3404167",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        },
                        {
                            "id": 11,
                            "patroli_darat_id": 12204,
                            "sumber_air_id": 1,
                            "latitude": "-0.273694444",
                            "longitude": "109.3403889",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        },
                        {
                            "id": 13,
                            "patroli_darat_id": 12204,
                            "sumber_air_id": 1,
                            "latitude": "-0.269944444",
                            "longitude": "109.3392222",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1.5",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        },
                        {
                            "id": 14,
                            "patroli_darat_id": 12204,
                            "sumber_air_id": 1,
                            "latitude": "-0.26925",
                            "longitude": "109.33975",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1.2",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        }
                    ],
                    "desa_kelurahan": {
                        "id": 1080,
                        "posko_id": null,
                        "nama": "Rasau Jaya Umum",
                        "created_at": null,
                        "updated_at": null,
                        "kecamatan_id": 577,
                        "kecamatan": {
                            "id": 577,
                            "kota_kab_id": 253,
                            "nama": "Rasau Jaya",
                            "created_at": null,
                            "updated_at": null,
                            "kotakab": {
                                "id": 253,
                                "daops_id": 337,
                                "nama": "kubu raya",
                                "created_at": null,
                                "updated_at": null,
                                "daops": {
                                    "id": 337,
                                    "provinsi_id": 54,
                                    "nama": "pontianak",
                                    "created_at": null,
                                    "updated_at": null,
                                    "provinsi": {
                                        "id": 54,
                                        "nama": "Kalimantan Barat",
                                        "created_at": null,
                                        "updated_at": null
                                    }
                                }
                            }
                        }
                    },
                    "curah_hujan": null,
                    "cuaca_pagi": null,
                    "cuaca_siang": null,
                    "cuaca_sore": null
                },
                {
                    "id": 12205,
                    "kegiatan_patroli_id": 1,
                    "desa_kelurahan_id": 1081,
                    "suhu": null,
                    "kelembaban": null,
                    "kecepatan_angin": null,
                    "dc_kk": null,
                    "ffmc_kkas": null,
                    "fwi": null,
                    "aktivitas_masyarakat": null,
                    "keterangan_lokasi": null,
                    "created_at": null,
                    "updated_at": null,
                    "cuaca_pagi_id": 1,
                    "cuaca_sore_id": 1,
                    "cuaca_siang_id": 1,
                    "curah_hujan_id": 1,
                    "kondisi_vegetasi": [],
                    "kondisi_tanah": [
                        {
                            "id": 13,
                            "patroli_darat_id": 12205,
                            "tanah_id": 1,
                            "latitude": "-0.0297",
                            "longitude": "109.60928",
                            "luas": "0",
                            "kedalaman_gambut": "0",
                            "created_at": null,
                            "updated_at": null,
                            "potensi_karhutla_id": null,
                            "kondisi_karhutla_id": null,
                            "tanah": {
                                "id": 1,
                                "nama": "gambut",
                                "created_at": null,
                                "updated_at": null
                            },
                            "kondisi_karhutla": null,
                            "potensi_karhutla": null
                        }
                    ],
                    "kondisi_sumber_air": [
                        {
                            "id": 15,
                            "patroli_darat_id": 12205,
                            "sumber_air_id": 1,
                            "latitude": "-0.0297",
                            "longitude": "109.60928",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1.5",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        },
                        {
                            "id": 16,
                            "patroli_darat_id": 12205,
                            "sumber_air_id": 1,
                            "latitude": "-0.02717",
                            "longitude": "109.60889",
                            "panjang": "0",
                            "lebar": "2",
                            "kedalaman": "1.5",
                            "created_at": null,
                            "updated_at": null,
                            "sumber_air": {
                                "id": 1,
                                "name": "parit",
                                "created_at": null,
                                "updated_at": null
                            }
                        }
                    ],
                    "desa_kelurahan": {
                        "id": 1081,
                        "posko_id": null,
                        "nama": "limbung jaya",
                        "created_at": null,
                        "updated_at": null,
                        "kecamatan_id": 578,
                        "kecamatan": {
                            "id": 578,
                            "kota_kab_id": 253,
                            "nama": "sungai raya",
                            "created_at": null,
                            "updated_at": null,
                            "kotakab": {
                                "id": 253,
                                "daops_id": 337,
                                "nama": "kubu raya",
                                "created_at": null,
                                "updated_at": null,
                                "daops": {
                                    "id": 337,
                                    "provinsi_id": 54,
                                    "nama": "pontianak",
                                    "created_at": null,
                                    "updated_at": null,
                                    "provinsi": {
                                        "id": 54,
                                        "nama": "Kalimantan Barat",
                                        "created_at": null,
                                        "updated_at": null
                                    }
                                }
                            }
                        }
                    },
                    "curah_hujan": {
                        "id": 1,
                        "nama": "rendah",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_pagi": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_siang": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_sore": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    }
                },
                {
                    "id": 12206,
                    "kegiatan_patroli_id": 1,
                    "desa_kelurahan_id": 1082,
                    "suhu": null,
                    "kelembaban": null,
                    "kecepatan_angin": null,
                    "dc_kk": null,
                    "ffmc_kkas": null,
                    "fwi": null,
                    "aktivitas_masyarakat": null,
                    "keterangan_lokasi": null,
                    "created_at": null,
                    "updated_at": null,
                    "cuaca_pagi_id": 1,
                    "cuaca_sore_id": 1,
                    "cuaca_siang_id": 1,
                    "curah_hujan_id": 2,
                    "kondisi_vegetasi": [],
                    "kondisi_tanah": [],
                    "kondisi_sumber_air": [],
                    "desa_kelurahan": {
                        "id": 1082,
                        "posko_id": null,
                        "nama": "pancaroba",
                        "created_at": null,
                        "updated_at": null,
                        "kecamatan_id": 579,
                        "kecamatan": {
                            "id": 579,
                            "kota_kab_id": 253,
                            "nama": "sungai ambawang",
                            "created_at": null,
                            "updated_at": null,
                            "kotakab": {
                                "id": 253,
                                "daops_id": 337,
                                "nama": "kubu raya",
                                "created_at": null,
                                "updated_at": null,
                                "daops": {
                                    "id": 337,
                                    "provinsi_id": 54,
                                    "nama": "pontianak",
                                    "created_at": null,
                                    "updated_at": null,
                                    "provinsi": {
                                        "id": 54,
                                        "nama": "Kalimantan Barat",
                                        "created_at": null,
                                        "updated_at": null
                                    }
                                }
                            }
                        }
                    },
                    "curah_hujan": {
                        "id": 2,
                        "nama": "sedang",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_pagi": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_siang": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    },
                    "cuaca_sore": {
                        "id": 1,
                        "nama": "cerah",
                        "created_at": null,
                        "updated_at": null
                    }
                }
            ],
            "patroli_udara": [],
            "dokumentasi": [],
            "inventori_patroli": [],
            "kategori_patroli": null,
            "hotspot": [],
            "aktivitas_harian_patroli": [],
            "anggota_patroli": []
        }
    ]
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
  



