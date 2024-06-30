<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('about_us', 'PublicController::aboutUs');
$routes->get('our_team', 'PublicController::Team');




