<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Beranda::index');
$routes->get('/profil-mahasiswa', 'ProfilMahasiswa::index');
$routes->get('/diary', 'Diary::index');
$routes->get('/kuliah', 'Kuliah::index');
$routes->get('/kontak', 'Kontak::index');
