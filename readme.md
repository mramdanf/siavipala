## Siavipala

### System Requirement

- PHP 7.2.10
- PostgreSQL 9.3.23
- Composer version 1.6.5

### Fresh Install

- Clone repo ini
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan jwt:generate`
- Configure your `.env` file for authenticating via database
- Set the `API_PREFIX` parameter in your .env file (usually `api`).

### Dokumentasi API

[Dokumentasi API](https://github.com/mramdanf/siavipala/blob/master/DOC_API.md)

### Postgresql Database Dump

[Database Dump](https://github.com/mramdanf/siavipala/blob/master/siavipala_db.sql)