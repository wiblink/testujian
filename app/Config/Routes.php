<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->post('/register/save', 'Register::save');
$routes->get('/register/save', 'Register::save');
$routes->get('/login', 'Login::index',['as' => 'login']);
$routes->post('/login/process', 'Login::process');

$routes->post('/login/auth', 'Login::auth');
$routes->get('/login/auth', 'Login::auth');
$routes->get('/login/logout', 'Login::logout');
$routes->get('/logout', 'Login::logout');

$routes->get('testujian/register', 'Register::index');
$routes->get('testujian/login', 'Login::index');
$routes->get('testujian/testujian/public/bootstrap/css/bootstrap.min.css', '');

//produk
$routes->get('produk-list', 'ProdukCrud::index',['filter' => 'auth']);
$routes->get('produkCrud', 'ProdukCrud::index',['filter' => 'auth']);
$routes->get('produk-form', 'ProdukCrud::create',['filter' => 'auth']);
$routes->get('produkCrud/produk-form', 'ProdukCrud::create',['filter' => 'auth']);
$routes->get('produkCrud/produkCrud', 'ProdukCrud::index',['filter' => 'auth']);
$routes->post('submit-form', 'ProdukCrud::store');
$routes->get('edit-view/(:num)', 'ProdukCrud::singleUser/$1',['filter' => 'auth']);
$routes->post('update', 'ProdukCrud::update');
$routes->get('delete/(:num)', 'ProdukCrud::delete/$1');

//user
$routes->get('users-list', 'UserCrud::index',['filter' => 'auth']);
$routes->get('userCrud', 'UserCrud::index',['filter' => 'auth']);
$routes->get('user-form', 'UserCrud::create',['filter' => 'auth']);
$routes->post('submit-form-user', 'UserCrud::store');
$routes->get('user-edit-view/(:num)', 'UserCrud::singleUser/$1',['filter' => 'auth']);
$routes->post('update-user', 'UserCrud::update');
$routes->get('delete-user/(:num)', 'UserCrud::delete/$1');
$routes->get('upload/(:any)', 'UserCrud::getimages/$1');

//$routes->get('../upload/(:num)', 'UserCrud::singleUser/$1');

