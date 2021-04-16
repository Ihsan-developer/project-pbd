<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MenuController::home');
$routes->get('/home', 'MenuController::home');
$routes->post('/home/saran',  'SaranController::simpanSaran');
$routes->get('/data-pegawai',  'MenuController::data_pegawai');
$routes->get('/data-manager',  'ManagerController::data_manager');
$routes->get('/info-kegiatan',  'MenuController::info_kegiatan');
$routes->get('/ular',  'UlarController::ular');
$routes->get('/kue',  'KueController::kue');
$routes->get('/menu',  'MenuController::menu');
$routes->get('/data-cabang',  'CabangController::data_cabang');
$routes->get('/data-pelanggan',  'PelangganController::data_pelanggan');
$routes->get('/studi', 'StudiController::studi');

$routes->get('/registrasi',  'AuthController::registrasi');
$routes->post('/registrasi/simpan-registrasi',  'AuthController::simpanRegistrasi');

$routes->get('/login',  'AuthController::login');
$routes->post('/login/proses-login',  'AuthController::prosesLogin');

$routes->get('/logout',  'AuthController::logout');

$routes->get('/data-pegawai/tambah',  'MenuController::tambahPegawai');
$routes->post('/data-pegawai/simpan',  'MenuController::simpanPegawai');
$routes->get('/data-pegawai/edit/(:num)',  'MenuController::editPegawai/$1');
$routes->put('/data-pegawai/update/(:num)',  'MenuController::updatePegawai/$1');
$routes->delete('/data-pegawai/delete/(:num)',  'MenuController::deletePegawai/$1');

$routes->get('/data-manager/tambah',  'ManagerController::tambahManager');
$routes->post('/data-manager/simpan',  'ManagerController::simpanManager');
$routes->get('/data-manager/edit/(:num)',  'ManagerController::editManager/$1');
$routes->put('/data-manager/update/(:num)',  'ManagerController::updateManager/$1');
$routes->delete('/data-manager/delete/(:num)',  'ManagerController::deleteManager/$1');

$routes->get('/kue/tambah',  'KueController::tambahKue');
$routes->post('/kue/simpan',  'KueController::simpanKue');
$routes->get('/kue/edit/(:num)',  'KueController::editKue/$1');
$routes->put('/kue/update/(:num)',  'KueController::updateKue/$1');
$routes->delete('/kue/delete/(:num)',  'KueController::deleteKue/$1');

$routes->get('/data-cabang/tambah',  'CabangController::tambahCabang');
$routes->post('/data-cabang/simpan',  'CabangController::simpanCabang');
$routes->get('/data-cabang/edit/(:num)',  'CabangController::editCabang/$1');
$routes->put('/data-cabang/update/(:num)',  'CabangController::updateCabang/$1');
$routes->delete('/data-cabang/delete/(:num)',  'CabangController::deleteCabang/$1');

$routes->get('/data-pelanggan/tambah',  'PelangganController::tambahPelanggan');
$routes->post('/data-pelanggan/simpan',  'PelangganController::simpanPelanggan');
$routes->get('/data-pelanggan/edit/(:num)',  'PelangganController::editPelanggan/$1');
$routes->put('/data-pelanggan/update/(:num)',  'PelangganController::updatePelanggan/$1');
$routes->delete('/data-pelanggan/delete/(:num)',  'PelangganController::deletePelanggan/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
