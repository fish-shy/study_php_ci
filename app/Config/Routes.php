<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/salam', 'Salam::index');
$routes->setAutoRoute(false);

$routes->group('', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('blog/tampil', 'Blog::tampil');
    $routes->get('salam/nama/(:any)', 'Salam::nama/$1');
}); 