<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/test', 'NewController::test');

$routes->get('/submit-dummy-curriculum-form', 'NewDynamicPageController::insertDummy');

$routes->post('/cookiexample', 'CookieController::validateForm');

$routes->get('/postLogin', 'CookieController::postLogin');

$routes->post('/check', function(){
    echo "Response";
});

