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

$api = $app->make(Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {

    // =============== LOGIN =============== //
    $api->post('/auth/login', [
        'as' => 'api.auth.login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postLogin'
    ]);

    $api->group([
        'namespace' => 'App\Http\Controllers'
    ], function ($api) {
        
        // =============== PROVINSI =============== //
        // Resume perprovinsi
        $api->get('/provinsi/resume', 'ProvinsiController@resume');
        // Get list all provinsi
        $api->get('/provinsi/list', 'ProvinsiController@list');
    });

    

    
    
});