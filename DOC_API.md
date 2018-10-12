# Dokumentasi API Siavipala

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
  



