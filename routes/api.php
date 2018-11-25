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
$app->get('/test', 'ExampleController@test');
// Unduh laporan patroli
$app->get('/patroli/unduh-laporan', 'PatroliController@unduh_laporan_patroli_v2');

// Entrust role
// Route to create a new role
$app->post('role', 'EntrustRoleController@createRole');
// Route to create a new permission
$app->post('permission', 'EntrustRoleController@createPermission');
// Route to assign role to user
$app->post('assign-role', 'EntrustRoleController@assignRole');
// Route to attache permission to a role
$app->post('attach-permission', 'EntrustRoleController@attachPermission');
// List Role User
$app->get('role-user', 'EntrustRoleController@listRoleUser');

$api = $app->make(Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {

    // Login
    $api->post('/auth/login', [
        'as' => 'api.auth.login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postLogin'
    ]);

    // Guest
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
        // List Daops
        $api->get('/daops/list', 'DaopsController@list');
        // List Kota Kab
        $api->get('/kotakab/list', 'KotakabController@list');
        // List Kecamatan
        $api->get('/kecamatan/list', 'KecamatanController@list');
        // List Posko
        $api->get('/posko/list', 'PoskoController@list');
        // List Desa Kelurahan
        $api->get('/desakelurahan/list', 'DesaKelurahanController@list');
        // List Tipe Kebakaran
        $api->get('/tipe-kebakaran/list', 'TipeKebakaranController@list');
        // List Pemilik Lahan
        $api->get('/pemilik-lahan/list', 'PemilikLahanController@list');
        
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

    // Pengguna Terdaftar
    $api->group([
        'namespace' => 'App\Http\Controllers',
        'middleware' => 'api.auth'
    ], function ($api) {

        // List invengori patroli
        $api->get('/inventori-patroli/list', 'InventoriController@list');
        // List jenis tanah
        $api->get('/tanah/list', 'TanahController@list');
        // List jenis vegetasi
        $api->get('/vegetasi/list', 'VegetasiController@list');
        // list hotspot
        $api->get('/hotspot/list', 'HotspotController@list');
        // List nama satelit
        $api->get('/satelit/list', 'SatelitController@list');
        // List kategori kondisi vegetasi
        $api->get('/kategori-kondisi-vegetasi/list', 'KategoriKondisiVegetasiController@list');
        // List potensi karhutla
        $api->get('/potensi-karhutla/list', 'PotensiKarhutlaController@list');
        // List kondisi karhutla
        $api->get('/kondisi-karhutla/list', 'KondisiKarhutlaController@list');
        // List keterangan lokasi
        $api->get('/keterangan-lokasi/list', 'KeteranganLokasiController@list');

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

        // Create provinsi
        $api->post('/provinsi/create', 'ProvinsiController@store');
        // Update provinsi
        $api->post('/provinsi/update', 'ProvinsiController@update');
        // Delete provinsi
        $api->post('/provinsi/delete', 'ProvinsiController@remove');

        // Create daops
        $api->post('/daops/create', 'DaopsController@store');
        // Update daops
        $api->post('/daops/update', 'DaopsController@update');
        // Delete dasops
        $api->post('/daops/delete', 'DaopsController@remove');

        // Create kotakab
        $api->post('/kotakab/create', 'KotakabController@store');
        // Update kotakab
        $api->post('/kotakab/update', 'KotakabController@update');
        // Delete kotakab
        $api->post('/kotakab/delete', 'KotakabController@remove');

        // Create kecamatan
        $api->post('/kecamatan/create', 'KecamatanController@store');
        // Update kecamatan
        $api->post('/kecamatan/update', 'KecamatanController@update');
        // Delete kecamatan
        $api->post('/kecamatan/delete', 'KecamatanController@remove');

        // Create posko
        $api->post('/posko/create', 'PoskoController@store');
        // Update posko
        $api->post('/posko/update', 'PoskoController@update');
        // Delete posko
        $api->post('/posko/delete', 'PoskoController@remove');

        // Create desa kelurahan
        $api->post('/desakelurahan/create', 'DesaKelurahanController@store');
        // Update desa kelurahan
        $api->post('/desakelurahan/update', 'DesaKelurahanController@update');
        // Delete desa kelurahan
        $api->post('/desakelurahan/delete', 'DesaKelurahanController@remove');
        
    });

    

    
    
});