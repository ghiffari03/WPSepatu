<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home/home', 'Home::index');

//datasepatu
$routes->get('datasepatu/view', 'sepatucontroller::viewsepatu');
$routes->get('datasepatu/forminputsepatu', 'sepatucontroller::inputsepatu');
$routes->post('datasepatu/simpansepatu', 'sepatucontroller::simpansepatu');
$routes->get('datasepatu/formeditsepatu/(:num)', 'sepatucontroller::formeditsepatu/$1');
$routes->post('datasepatu/editsepatu/(:num)', 'sepatucontroller::editsepatu/$1');
$routes->get('datasepatu/hapussepatu/(:num)', 'sepatucontroller::hapussepatu/$1');

//data kriteria
$routes->get('datakriteria/view', 'kriteriacontroller::viewkriteria');
$routes->get('datakr/forminputkr', 'kriteriacontroller::inputkr');
$routes->post('datakr/simpankr', 'kriteriacontroller::simpankr');
$routes->get('datakr/formeditkr/(:num)', 'kriteriacontroller::formeditkr/$1');
$routes->post('datakr/editkr/(:num)', 'kriteriacontroller::editkr/$1');
$routes->get('datakr/hapuskr/(:num)', 'kriteriacontroller::hapuskr/$1');

// Nilai Alternatif Routes
$routes->get('datanilai/view', 'NilaiAlternatifController::viewNilaiAlternatif');
$routes->get('datanilai/forminputnilai', 'NilaiAlternatifController::inputNilai');
$routes->post('datanilai/simpanNilai', 'NilaiAlternatifController::simpanNilai');
$routes->get('datanilai/formeditnilai/(:num)', 'NilaiAlternatifController::formEditNilai/$1');
$routes->post('datanilai/editnilai/(:num)', 'NilaiAlternatifController::editNilai/$1');
$routes->get('datanilai/hapusnilai/(:num)', 'NilaiAlternatifController::hapusNilai/$1');

$routes->get('Home/formnormalisasi', 'Home::formnormalisasi');
$routes->get('Home/formpreferensi', 'Home::formpreferensi');
$routes->get('Home/formrank', 'Home::formrank');
