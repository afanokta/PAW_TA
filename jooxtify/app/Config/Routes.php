<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/jooxtify', 'Home::jooxtify');
$routes->get('/dashboard', 'penggunaController::index');
$routes->get('/dashboard/lagu', 'laguController::index');
$routes->get('/dashboard/genre', 'genreController::index');
$routes->get('/dashboard/genre/create', 'genreController::create');
$routes->post('/login/start', 'loginController::start');


// ALBUM
$routes->get('/dashboard/album', 'albumController::index');
$routes->get('/dashboard/album/create', 'albumController::create');
$routes->post('/dashboard/album', 'albumController::add');
$routes->get('/dashboard/album/edit/(:num)', 'albumController::edit/$1');
$routes->post('/dashboard/album/update', 'albumController::update');
$routes->get('/dashboard/album/hapus/(:num)', 'albumController::delete/$1');
$routes->get('/dashboard/album/restore/(:num)', 'albumController::restore/$1');
$routes->get('/dashboard/album/hapus-permanen/(:num)', 'albumController::full_delete/$1');

//PENYANYI
$routes->get('/dashboard/penyanyi', 'penyanyiController::index');

/*
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
