<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->post('produk', 'ProdukController::create', ['filter' => 'auth']);
$routes->post('produk/edit/(:any)', 'ProdukController::edit/$1', ['filter' => 'auth']);
$routes->get('produk/delete/(:any)', 'ProdukController::delete/$1', ['filter' => 'auth']);
$routes->get('produk/download', 'ProdukController::download', ['filter' => 'auth']);

$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('', 'TransaksiController::index');
    $routes->post('', 'TransaksiController::cart_add');
    $routes->post('edit', 'TransaksiController::cart_edit');
    $routes->get('delete/(:any)', 'TransaksiController::cart_delete/$1');
    $routes->get('clear', 'TransaksiController::cart_clear');
});

$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);

$routes->get('Logout', 'AuthController::Logout');

$routes->get('produk', 'ProdukController::index', ['filter' => 'auth']);
$routes->get('keranjang', 'TransaksiController::index', ['filter' => 'auth']);

