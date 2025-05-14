<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/salam', 'Salam::index');
$routes->get('/registrasi', 'Registrasi::index');
$routes->get('/belajarhelper', 'BelajarHelper::index');
$routes->get('/belajarlibrary', 'BelajarLibrary::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/dashboard', 'Dashboard::index');


$routes->group('', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('blog/tampil', 'Blog::tampil');
    $routes->get('salam/nama/(:any)', 'Salam::nama/$1');
}); 

$routes->group('belajar',static function ($routes) {
    $routes->get('/', 'Belajar::index');
    $routes->get('(:any)', 'Belajar::$1');
}); 


$routes->group('registrasi',static function ($routes) {
    $routes->get('/registrasi', 'Registrasi::index');
    $routes->get('(:any)', 'Registrasi::$1');
});

$routes->group('belajarhelper',static function ($routes) {
    $routes->get('/belajarhelper', 'BelajarHelper::index');
    $routes->get('(:any)', 'BelajarHelper::$1');
});


$routes->group('belajarlibrary',static function ($routes) {
    $routes->get('/belajarlibrary', 'BelajarLibrary::index');
    $routes->get('(:any)', 'BelajarLibrary::$1');
});