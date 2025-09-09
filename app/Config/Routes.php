<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/', 'Home::index');         // default
$routes->get('home', 'Home::index');      // add this
$routes->get('about', 'Home::about');     // about page
$routes->get('contact', 'Home::contact'); // contact page


