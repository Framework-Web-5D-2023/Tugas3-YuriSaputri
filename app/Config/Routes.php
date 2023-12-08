<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about/(:num)/(:any)', 'About::create/$1/$2');
$routes->get('/login', 'Login::index');
$routes->post('/login/signin', 'Login::signin');
//$routes->get('/praktikum2', 'Home::praktikum2');