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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');

$routes->get('/usuarios', 'UserController::index');
$routes->post('/usuarios/adicionar', 'UserController::adicionar_usuario');

$routes->get('/clientes', 'ClientController::index');
$routes->post('/clientes/adicionar', 'ClientController::adicionar_cliente');
$routes->post('/clientes/remover', 'ClientController::deletar_cliente');
$routes->post('/clientes/editar', 'ClientController::editar_cliente');
$routes->get('/clientes/get-dados/(:num)', 'ClientController::get_dados/$1');

$routes->get('/empresa', 'Empresa::index');
$routes->post('/empresas/adicionar', 'Empresa::adicionar_empresa');
$routes->delete('/empresas/remover/(:num)', 'Empresa::remover_empresa/$1');
$routes->post('/empresas/editar', 'Empresa::editar_empresa');
$routes->get('/empresas/get-dados/(:num)', 'Empresa::get_dados/$1');


$routes->get('/rup', 'RupController::index');

$routes->get('/contato', 'Home::contato');


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
