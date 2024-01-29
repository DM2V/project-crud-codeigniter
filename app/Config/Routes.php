<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('books', 'Books::index');
$routes->get('create', 'Books::create');
$routes->post('save', 'Books::save');
$routes->get('delete/(:num)', 'Books::delete/$1');
$routes->get('edit/(:num)', 'Books::edit/$1');
$routes->post('update', 'Books::update');
