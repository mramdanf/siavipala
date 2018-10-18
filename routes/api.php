<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $app->get('/read-csv', 'ReadCsvController@migrasi_tb_kegiatan_patroli');
// $app->get('/test', 'ReadCsvController@test');
// $app->get('/migrasi2', 'ReadCsvController@migrasi_tb_lokasi_patroli');

$api = $app->make(Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {

    $api->post('/auth/login', [
        'as' => 'api.auth.login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postLogin'
    ]);

    // Guest Group
    $api->group([
        'namespace' => 'App\Http\Controllers'
    ], function ($api) {
        // Get list all provinsi
        $api->get('/provinsi/list', 'ProvinsiController@list');
        // Resume perprovinsi
        $api->get('/provinsi/resume', 'ProvinsiController@resume');
        // Get list kategori patrolil
        $api->get('/kategori-patroli/list', 'KategoriPatroliController@list');
        // List patroli (can be filtered)
        $api->get('/patroli/list', 'PatroliController@list');
        // List kategori curah hujan
        $api->get('/curah-hujan/list', 'CurahHujanController@list');
        // List kategori cuaca
        $api->get('/cuaca/list', 'CuacaController@list');
        // List artifisial params
        $api->get('/artifisial-param/list', 'ArtifisialParamController@list');
        // List sumber air
        $api->get('/sumber-air/list', 'SumberAirController@list');
    });

    // Auth Group
    $api->group([
        'namespace' => 'App\Http\Controllers\Auth',
        'middleware' => 'api.auth'
    ], function ($api) {
        $api->get('/auth/user', 'AuthController@getUser');
        $api->patch('/auth/refresh', 'AuthController@patchRefresh');
        $api->delete('/auth/invalidate', 'AuthController@deleteInvalidate');
    });

    // Required Login Group
    $api->group([
        'namespace' => 'App\Http\Controllers',
        'middleware' => 'api.auth'
    ], function ($api) {
        // Create laporan patroli
        $api->post('/patroli/create', 'PatroliController@create');
        // Update laporan patroli
        $api->post('/patroli/update', 'PatroliController@update');
        // Delete laporan patroli
        $api->post('/patroli/delete', 'PatroliController@remove');
        
        // List aktivitas harian
        $api->get('/aktivitas-harian/list', 'AktivitasHarianController@list');

        // List kategori anggota
        $api->get('/kategori-anggota/list', 'KategoriAnggotaController@list');
        // List anggota
        $api->get('/anggota/list', 'AnggotaController@list');
        // Create anggota
        $api->post('/anggota/create', 'AnggotaController@store');
        // Update anggota
        $api->post('/anggota/update', 'AnggotaController@update');
        // Delete anggota
        $api->post('/anggota/delete', 'AnggotaController@remove');

        // List pengguna
        $api->get('/pengguna/list', 'PenggunaController@list');
        // Create pengguna
        $api->post('/pengguna/create', 'PenggunaController@store');
        // Update pengguna
        $api->post('/pengguna/update', 'PenggunaController@update');
        // Delete pengguna
        $api->post('/pengguna/delete', 'PenggunaController@remove');
        
    });
    
});