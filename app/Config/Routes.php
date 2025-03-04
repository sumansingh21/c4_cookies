<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/test', 'NewController::test');

$routes->get('/submit-dummy-curriculum-form', 'NewDynamicPageController::insertDummy');

$routes->post('/cookie_example', 'CookieController::validateForm');


