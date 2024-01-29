<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog-app', 'BlogPost');
$routes->get('/auth', 'UserAuthenticationController::index/$1/$2');
