<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('automations', 'AutomationController::index');
$routes->get('automations/create', 'AutomationController::create');
$routes->post('automations/store', 'AutomationController::store');
$routes->get('automations/enable/(:num)', 'AutomationController::enable/$1');
$routes->get('automations/disable/(:num)', 'AutomationController::disable/$1');

service('auth')->routes($routes);
