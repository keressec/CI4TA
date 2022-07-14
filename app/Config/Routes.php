<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
//Database Forge
$routes->get('create-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('tugasakhir')) {
        echo 'Database created!';
    }
});
// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/acara', 'Acara::index');
$routes->get('/acara/create', 'Acara::create');
$routes->post('/acara', 'Acara::store');
$routes->get('/acara/edit/(:num)', 'Acara::edit/$1');
$routes->put('/acara/(:any)', 'Acara::update/$1');
$routes->delete('/acara/(:segment)', 'Acara::delete/$1');

$routes->get('/auth', 'Auth::index');
$routes->get('login', 'Auth::login');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/loginProcess', 'Auth::loginProcess');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
$routes->get('/auth/logout', 'Auth::logout');

$routes->get('/groups/sampah', 'Groups::sampah');
$routes->get('/groups/restore/(:any)', 'Groups::restore/$1');
$routes->get('/groups/restore', 'Groups::restore');
$routes->get('/groups/delete2/(:any)', 'Groups::delete2/$1');
$routes->post('/groups/delete2/(:any)', 'Groups::delete2/$1');
$routes->get('/groups/delete2', 'Groups::delete2');
$routes->post('/groups/delete2', 'Groups::delete2');
$routes->presenter('groups',['filter' => 'isLoggedIn']);

$routes->resource('contacts',['filter' => 'isLoggedIn']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
