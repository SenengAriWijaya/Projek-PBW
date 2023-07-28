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
// $routes->setDefaultController('Product');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/register', 'Register::index');
$routes->get('/Register', 'Register::index');
$routes->post('/register/save', 'Register::save');
$routes->get('/pages/login', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/Login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/', 'Index::index');
$routes->get('/index', 'Index::index');
$routes->get('/Profile', 'Profile::index');
$routes->get('/Edit_Profile', 'Edit_Profile::index');
$routes->get('/About', 'About::index');
$routes->get('/Contact', 'Contact::index');
$routes->get('/Shop', 'Shop::index');
$routes->post('/Shop', 'Shop::index');
$routes->get('/shop', 'shop::index');
$routes->get('/Single_Product', 'Single_Product::index');
$routes->get('/Single_Product1', 'Single_Product1::index');
$routes->get('/Single_Product2', 'Single_Product2::index');
$routes->get('/Single_Product3', 'Single_Product3::index');
$routes->get('/Single_Product4', 'Single_Product4::index');
$routes->get('/Single_Product5', 'Single_Product5::index');
$routes->get('/Cart', 'Cart::index');
$routes->get('/cart', 'cart::index');
$routes->get('/Checkout', 'Checkout::index');
$routes->get('/checkout', 'checkout::index');
$routes->get('/shop/(:segment)', 'Shop::detail/$1');


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
