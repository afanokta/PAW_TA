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


// $routes->get('/', 'Home::index');
// $routes->get('/jooxtify', 'Home::jooxtify');
$routes->get('/dashboard', 'penggunaController::index');
$routes->get('/dashboard/pengguna', 'penggunaController::index');
$routes->get('/dashboard/lagu', 'laguController::index');
// $routes->get('/dashboard/genre', 'genreController::index');
// $routes->get('/dashboard/genre/create', 'genreController::create');
$routes->get('/register', 'registerController::index');
$routes->post('/register/reg', 'registerController::reg');
$routes->post('/login/start', 'loginController::start');
$routes->get('/login', 'loginController::login');
$routes->get('/logout', 'loginController::logout');


// ALBUM
$routes->group('', function ($routes) {
    $control = 'Home';
    $routes->get('/', "$control::index");
    $routes->get('/detail/(:num)', "$control::detail/$1");
    $routes->post('/profile/update', "$control::updateProfile");
    $routes->get('/profile/(:num)', "$control::profile/$1");
    $routes->get('/play', "$control::play");
    $routes->get('/search', "$control::search");
    $routes->get('/about', "$control::about");
});
$routes->group('dashboard', function ($routes) {

    $routes->get('', 'penggunaController:index');
    $routes->group('pengguna', function ($routes) {
        $control = 'penggunaController';
        $routes->get('', "$control::index");
        $routes->post('', "$control::add");
        $routes->get('create', "$control::create");
        $routes->get('edit/(:num)', "$control::edit/$1");
        $routes->get('hapus/(:num)', "$control::delete/$1");
        $routes->get('restore/(:num)', "$control::restore/$1");
        $routes->get('hapus-permanen/(:num)', "$control::full_delete/$1");
        $routes->post('update', "$control::update");
        $routes->post('', "$control::add");
    });
    $routes->group('album', function ($routes) {
        $control = 'albumController';
        $routes->get('', "$control::index");
        $routes->get('create', "$control::create");
        $routes->get('edit/(:num)', "$control::edit/$1");
        $routes->get('hapus/(:num)', "$control::delete/$1");
        $routes->get('restore/(:num)', "$control::restore/$1");
        $routes->get('hapus-permanen/(:num)', "$control::full_delete/$1");
        $routes->post('update', "$control::update");
        $routes->post('', "$control::add");
    });
    $routes->group('penyanyi', function ($routes) {
        $control = 'penyanyiController';
        $routes->get('', "$control::index");
        $routes->get('create', "$control::create");
        $routes->get('edit/(:num)', "$control::edit/$1");
        $routes->get('hapus/(:num)', "$control::delete/$1");
        $routes->get('restore/(:num)', "$control::restore/$1");
        $routes->get('hapus-permanen/(:num)', "$control::full_delete/$1");
        $routes->post('update', "$control::update");
        $routes->post('', "$control::add");
    });
    $routes->group('lagu', function ($routes) {
        $control = 'laguController';
        $routes->get('', "$control::index");
        $routes->get('create', "$control::create");
        $routes->get('edit/(:num)', "$control::edit/$1");
        $routes->get('hapus/(:num)', "$control::delete/$1");
        $routes->get('restore/(:num)', "$control::restore/$1");
        $routes->get('hapus-permanen/(:num)/(:any)', "$control::full_delete/$1/$2");
        $routes->post('update', "$control::update");
        $routes->post('', "$control::add");
    });
    $routes->group('genre', function ($routes) {
        $control = 'genreController';
        $routes->get('', "$control::index");
        $routes->get('create', "$control::create");
        $routes->get('edit/(:num)', "$control::edit/$1");
        $routes->get('hapus/(:num)', "$control::delete/$1");
        $routes->get('restore/(:num)', "$control::restore/$1");
        $routes->get('hapus-permanen/(:num)', "$control::full_delete/$1");
        $routes->post('update', "$control::update");
        $routes->post('', "$control::add");
    });
});


// ALBUM
// $routes->get('/dashboard/album', 'albumController::index');
// $routes->get('/dashboard/album/create', 'albumController::create');
// $routes->post('/dashboard/album', 'albumController::add');
// $routes->get('/dashboard/album/edit/(:num)', 'albumController::edit/$1');
// $routes->post('/dashboard/album/update', 'albumController::update');
// $routes->get('/dashboard/album/hapus/(:num)', 'albumController::delete/$1');
// $routes->get('/dashboard/album/restore/(:num)', 'albumController::restore/$1');
// $routes->get('/dashboard/album/hapus-permanen/(:num)', 'albumController::full_delete/$1');

// //PENYANYI
// $routes->get('/dashboard/penyanyi', 'penyanyiController::index');
// $routes->get('/dashboard/penyanyi/create', 'penyanyiController::create');
// $routes->post('/dashboard/penyanyi', 'penyanyiController::add');
// $routes->get('/dashboard/penyanyi/edit/(:num)', 'penyanyiController::edit/$1');
// $routes->post('/dashboard/penyanyi/update', 'penyanyiController::update');
// $routes->get('/dashboard/penyanyi/hapus/(:num)', 'penyanyiController::delete/$1');
// $routes->get('/dashboard/penyanyi/restore/(:num)', 'penyanyiController::restore/$1');
// $routes->get('/dashboard/penyanyi/hapus-permanen/(:num)', 'penyanyiController::full_delete/$1');

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
