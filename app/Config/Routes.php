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

//Home
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/about', 'Home::about');
$routes->get('/contacts', 'Home::contacts');

//Shop
$routes->get('/shop', 'Shop::shop');
$routes->get('/shop_category', 'Shop::shop_category');
$routes->get('/shoplist', 'Shop::shoplist');

//Help Center
$routes->get('/helpcenter', 'Help::helpcenter');
$routes->get('/helpsingle', 'Help::helpsingle');

//Cart
$routes->get('/cart', 'Cart::cart');

//Checkout
$routes->get('/tracking', 'Checkout::tracking');

//User Dashboard
$routes->get('/orders', 'UserDash::orders');
$routes->get('/wishlist', 'UserDash::wishlist');
$routes->get('/support', 'UserDash::support');
$routes->get('/single', 'UserDash::single');
$routes->get('/singlesupport', 'UserDash::singlesupport');
$routes->get('/profile', 'UserDash::profile');
$routes->get('/address', 'UserDash::address');
$routes->get('/payment', 'UserDash::payment');
$routes->get('/signin', 'UserDash::signin');






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
