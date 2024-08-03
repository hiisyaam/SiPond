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
$routes->get('/absensi/smp','Absen::SMP');
$routes->get('/absensi/sma','Absen::SMA');
$routes->get('/absensi/karyawan','Absen::karyawan');

$routes->get('/tahfidz/listHalaqoh','Tahfidz::index');
$routes->get('/tahfidz/rekap','Tahfidz::rekapTahfidz');

$routes->get('/Kesehatan/kesehatan','Kesehatan::index');
$routes->get('/Kesehatan/dataPasien','Kesehatan::listPasien');

$routes->get('/Kesantrian/penilaian', 'Kesantrian::index');
$routes->get('/Kesantrian/dataNilai', 'Kesantrian::dataNilai');
$routes->get('/Kesantrian/izin','Kesantrian::izin');
$routes->get('/Kesantrian/dataPerizinan','Kesantrian::dataIzin');
$routes->get('/Kesantrian/pelanggaran','Kesantrian::pelanggaran');

$routes->get('/prestasi','Home::prestasi');
$routes->get('/pengumuman','Home::pengumuman');
$routes->get('/mapel','Home::mapel');