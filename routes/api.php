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


// Entrust role
// Route to create a new role
$app->get('role/list', 'EntrustRoleController@listRole');
$app->post('role/create', 'EntrustRoleController@createRole');
// Route to create a new permission
$app->get('permission/list', 'EntrustRoleController@listPermission');
$app->post('permission/create', 'EntrustRoleController@createPermission');
// Route to assign role to user
$app->post('assign-role', 'EntrustRoleController@assignRole');
// Route to attache permission to a role
$app->post('attach-permission', 'EntrustRoleController@attachPermission');
// List Role User
$app->get('role-user', 'EntrustRoleController@listRoleUser');

$api = $app->make(Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {

    // LOGIN
    $api->post('/auth/login', [
        'as' => 'api.auth.login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postLogin'
    ]);

    $api->group([
        'namespace' => 'App\Http\Controllers'
    ], function ($api) {
        
        // NO AUTH
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
        // List aktivitas harian
        $api->get('/aktivitas-harian/list', 'AktivitasHarianController@list');
        // List kategori anggota
        $api->get('/kategori-anggota/list', 'KategoriAnggotaController@list');
        // Hotspot sipongi by date range
        $api->get('/hotspot-sipongi/date-range', 'SipongiHotspotController@hotspotByDateRange');


        // WITH PERMISSION OR WITH AUTH
        // List pengguna
        $api->get('/pengguna/list', [
            'uses' => 'PenggunaController@list',
            'middleware' => ['ability:pengguna-list']
        ]);
        // Create pengguna
        $api->post('/pengguna/create', [
            'uses' => 'PenggunaController@store',
            'middleware' => ['ability:pengguna-create']
        ]);
        // Update pengguna
        $api->post('/pengguna/update', [
            'uses' => 'PenggunaController@update',
            'middleware' => ['ability:pengguna-update']
        ]);
        // Delete pengguna
        $api->post('/pengguna/delete', [
            'uses' => 'PenggunaController@remove',
            'middleware' => ['ability:pengguna-delete']
        ]);

        // Create provinsi
        $api->post('/provinsi/create', [
            'uses' => 'ProvinsiController@store',
            'middleware' => ['ability:provinsi-create']
        ]);
        // Update provinsi
        $api->post('/provinsi/update', [
            'uses' => 'ProvinsiController@update',
            'middleware' => ['ability:provinsi-update']
        ]);
        // Delete provinsi
        $api->post('/provinsi/delete', [
            'uses' => 'ProvinsiController@remove',
            'middleware' => ['ability:provinsi-delete']
        ]);

        // Create laporan patroli
        $api->post('/patroli/create', [
            'uses' => 'PatroliController@create',
            'middleware' => ['ability:patroli-create']
        ]);
        // Update laporan patroli
        $api->post('/patroli/update', [
            'uses' => 'PatroliController@update',
            'middleware' => ['ability:patroli-update']
        ]);
        // Delete laporan patroli
        $api->post('/patroli/delete', [
            'uses' => 'PatroliController@remove',
            'middleware' => ['ability:patroli-delete']
        ]);

        // Unduh laporan patroli
        $api->get('/patroli/unduh-laporan', [
            'uses' => 'PatroliController@unduh_laporan_patroli',
            'middleware' => ['ability:patroli-unduh-laporan']
        ]);
        // Unduh rekapitulasi laporan patroli
        $api->get('/patroli/unduh-rekapitulasi-laporan', [
            'uses' => 'PatroliController@unduh_rekapitulasi_laporan_patroli',
            'middleware' => ['ability:patroli-unduh-rekapitulasi-laporan']
        ]);

        // Create daops
        $api->post('/daops/create', [
            'uses' => 'DaopsController@store',
            'middleware' => ['ability:daops-create']
        ]);
        // Update daops
        $api->post('/daops/update', [
            'uses' => 'DaopsController@update',
            'middleware' => ['ability:daops-update']
        ]);
        // Delete dasops
        $api->post('/daops/delete', [
            'uses' => 'DaopsController@remove',
            'middleware' => ['ability:daops-delete']
        ]);

        // Create kotakab
        $api->post('/kotakab/create', [
            'uses' => 'KotakabController@store',
            'middleware' => ['ability:kotakab-create']
        ]);
        // Update kotakab
        $api->post('/kotakab/update', [
            'uses' => 'KotakabController@update',
            'middleware' => ['ability:kotakab-update']
        ]);
        // Delete kotakab
        $api->post('/kotakab/delete', [
            'uses' => 'KotakabController@remove',
            'middleware' => ['ability:kotakab-delete']
        ]);

        // Create kecamatan
        $api->post('/kecamatan/create', [
            'uses' => 'KecamatanController@store',
            'middleware' => ['ability:kecamatan-create']
        ]);
        // Update kecamatan
        $api->post('/kecamatan/update', [
            'uses' => 'KecamatanController@update',
            'middleware' => ['ability:kecamatan-update']
        ]);
        // Delete kecamatan
        $api->post('/kecamatan/delete', [
            'uses' => 'KecamatanController@remove',
            'middleware' => ['ability:kecamatan-delete']
        ]);

        // Create posko
        $api->post('/posko/create', [
            'uses' => 'PoskoController@store',
            'middleware' => ['ability:posko-create']
        ]);
        // Update posko
        $api->post('/posko/update', [
            'uses' => 'PoskoController@update',
            'middleware' => ['ability:posko-update']
        ]);
        // Delete posko
        $api->post('/posko/delete', [
            'uses' => 'PoskoController@remove',
            'middleware' => ['ability:posko-delete']
        ]);

        // Create desa kelurahan
        $api->post('/desakelurahan/create', [
            'uses' => 'DesaKelurahanController@store',
            'middleware' => ['ability:desakelurahan-create']
        ]);
        // Update desa kelurahan
        $api->post('/desakelurahan/update', [
            'uses' => 'DesaKelurahanController@update',
            'middleware' => ['ability:desakelurahan-update']
        ]);
        // Delete desa kelurahan
        $api->post('/desakelurahan/delete', [
            'uses' => 'DesaKelurahanController@remove',
            'middleware' => ['ability:desakelurahan-delete']
        ]);
        
        // List anggota
        $api->get('/anggota/list', [
            'uses' => 'AnggotaController@list',
            'middleware' => ['ability:anggota-list']
        ]);
        // Create anggota
        $api->post('/anggota/create', [
            'uses' => 'AnggotaController@store',
            'middleware' => ['ability:anggota-create']
        ]);
        // Update anggota
        $api->post('/anggota/update', [
            'uses' => 'AnggotaController@update',
            'middleware' => ['ability:anggota-update']
        ]);
        // Delete anggota
        $api->post('/anggota/delete', [
            'uses' => 'AnggotaController@remove',
            'middleware' => ['ability:anggota-delete']
        ]);

        // List role
        $api->get('/role/list', [
            'uses' => 'RoleController@list'
        ]);
        // Create role
        $api->post('/role/create', [
            'uses' => 'RoleController@store'
        ]);
        // Update role
        $api->post('/role/update', [
            'uses' => 'RoleController@update'
        ]);
        // Delete role
        $api->post('/role/delete', [
            'uses' => 'RoleController@delete'
        ]);
    });
    
});