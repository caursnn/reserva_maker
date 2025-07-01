<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('reserva', 'Reserva::index');
$routes->get('reserva/criar', 'Reserva::criar');
$routes->post('reserva/salvar', 'Reserva::salvar');

