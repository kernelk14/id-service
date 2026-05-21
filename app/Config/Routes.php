<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\IDService;
/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'IDService::index', ['filter' => 'session']);
$routes->get('requests', 'IDService::index', ['filter' => 'session']);
$routes->get('requests/create', 'IDService::create', ['filter' => 'session']);

service('auth')->routes($routes);
$routes->post('user/store', 'IDService::store');