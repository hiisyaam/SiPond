<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::logout');
$routes->get('/layout', 'Home::viewLayout');

$routes->get('/tampilData', 'ListData::index');
$routes->get('/tampilData/SMP', 'ListData::SMP');
$routes->get('/tampilData/SMA', 'ListData::SMA');

$routes->get('/tampilData/guru','ListData::guru');
$routes->get('/tampilData/staffTU','ListData::staffTU');
$routes->get('/tampilData/amil','ListData::amil');


$routes->get('/absensi/sd','Absen::SD');