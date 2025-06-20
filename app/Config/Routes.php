<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/uts', 'UtsFikri::index');
$routes->get('/beranda', 'Beranda::index');
$routes->get('/portofoilo', 'PortofolioDetails::index');
$routes->get('/service', 'ServiceDetails::index');
$routes->get('/starter', 'StarterPage::index');
$routes->get('/about', 'About::index');
$routes->set404Override(function() {
    echo view('errors/not_found');
});
