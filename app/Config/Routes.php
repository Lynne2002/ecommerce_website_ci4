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
$routes->setDefaultController('Users');
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
$routes->get('roles', 'roles::index');
$routes->get('role-add', 'roles::create');
$routes->post('role-store', 'roles::store');
$routes->get('role/edit/(:num)', 'roles::edit/$1');
$routes->post('role/update/(:num)', 'roles::update/$1');
$routes->get('role/delete/(:num)', 'roles::delete/$1');



$routes->get('/', 'Users::index');
$routes->match(['get', 'post'],'register', 'Users::register');
$routes->match(['get', 'post'],'profile', 'Users::profile');
$routes->get('admin', 'CRUDController::index');
$routes->get('user-add', 'CRUDController::create');
$routes->post('user-store', 'CRUDController::store');
$routes->get('users/edit/(:num)','CRUDController::edit/$1');
$routes->post('users/update/(:num)', 'CRUDController::update/$1');
$routes->get('users/delete/(:num)', 'CRUDController::delete/$1');


$routes->get('product/add/(:num)', 'ProductController::add/$1');
$routes->get('products', 'ProductController::index');
$routes->get('product-add', 'ProductController::create');
$routes->post('product-store', 'ProductController::store');
$routes->get('product/edit/(:num)', 'ProductController::edit/$1');
$routes->post('product/update/(:num)', 'ProductController::update/$1');
$routes->get('product/delete/(:num)', 'ProductController::delete/$1');

$routes->get('subcategory/add/(:num)', 'subcategories::add/$1');
$routes->get('subcategory-add', 'subcategory::create');
$routes->post('subcategory-store', 'subcategories::store');
$routes->get('subcategory/edit/(:num)', 'subcategories::edit/$1');
$routes->post('subcategory/update/(:num)', 'subcategories::update/$1');
$routes->get('subcategory/delete/(:num)', 'subcategories::delete/$1');


$routes->get('products_view', 'products_view::index');

$routes->get('payment_types', 'payment_types::index');
$routes->get('payment-add', 'payment_types::create');
$routes->post('payment-store', 'payment_types::store');
$routes->get('payment/edit/(:num)', 'payment_types::edit/$1');
$routes->post('payment/update/(:num)', 'payment_types::update/$1');
$routes->get('payment/delete/(:num)', 'payment_types::delete/$1');

$routes->get('ordersuccess', 'order_details::index');
$routes->post('orderdetails-store','order_details::store');

$routes->get('categories', 'categories::index');
$routes->get('category-add', 'categories::create');
$routes->post('category-store', 'categories::store');
$routes->get('category/edit/(:num)', 'categories::edit/$1');
$routes->post('category/update/(:num)', 'categories::update/$1');
$routes->get('category/delete/(:num)', 'categories::delete/$1');


$routes->get('checkout', 'checkout::index');
$routes->post('checkout-store', 'checkout::store');

$routes->get('payment', 'payment::index');
$routes->post('payments-store', 'payment::store');


$routes->get('wallet', 'Wallet::index');
$routes->get('wallet-add', 'Wallet::create');
$routes->post('wallet-store', 'Wallet::store');

$routes->get('contactus', 'contactus::index');
$routes->post('contactus-store','contactus::store');

$routes->get('viewmessage', 'viewmessage::index');


$routes->resource('apiproductsController');



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
