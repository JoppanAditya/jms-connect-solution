<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('blog', 'Home::blog');
$routes->get('contact', 'Home::contact');
$routes->get('it-consulting', 'Service::it_consulting');
$routes->get('cloud-solutions', 'Service::cloud_solutions');
$routes->get('cyber-security', 'Service::cyber_security');
$routes->post('service/save', 'Service::saveData');

$routes->get('sign-in', 'Auth::index');
$routes->get('sign-up', 'Auth::signup');
$routes->get('sign-out', 'Auth::signout');
$routes->get('auth/signin', 'Auth::signin');
$routes->post('auth/signin', 'Auth::signin');
$routes->get('auth/signup', 'Auth::register');
$routes->post('auth/signup', 'Auth::register');

$routes->get('profile/(:any)', 'Profile::index/$1');
$routes->post('profile/update', 'Profile::update');
$routes->post('profile/change-password', 'Profile::changePassword');
$routes->delete('profile/delete/(:any)', 'Profile::delete/$1');
