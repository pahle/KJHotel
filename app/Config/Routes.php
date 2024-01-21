<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/greenhouse', 'Home::greenhouse');
$routes->get('/menu', 'Home::menu');
$routes->get('/contact', 'Home::contact');

$routes->get('/admin', 'Admin\Admin::index', ['filter' => 'authGuard']);
$routes->get('/admin/search', 'Admin\Admin::search', ['filter' => 'authGuard']);

// Grouped Filter Slider
$routes->group('admin/slider', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin\Slider::index');
    $routes->get('create', 'Admin\Slider::create');
    $routes->post('save', 'Admin\Slider::save');
    $routes->get('edit/(:segment)', 'Admin\Slider::edit/$1');
    $routes->post('update/(:segment)', 'Admin\Slider::update/$1');
    $routes->delete('(:num)', 'Admin\Slider::delete/$1');
});

// Grouped Filter Room
$routes->group('admin/room', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin\Room::index');
    $routes->get('create', 'Admin\Room::create');
    $routes->post('save', 'Admin\Room::save');
    $routes->get('edit/(:segment)', 'Admin\Room::edit/$1');
    $routes->post('update/(:segment)', 'Admin\Room::update/$1');
    $routes->delete('(:num)', 'Admin\Room::delete/$1');
});

// Grouped Filter Menu
$routes->group('admin/menu', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin\Menu::index');
    $routes->get('create', 'Admin\Menu::create');
    $routes->post('save', 'Admin\Menu::save');
    $routes->get('edit/(:segment)', 'Admin\Menu::edit/$1');
    $routes->post('update/(:segment)', 'Admin\Menu::update/$1');
    $routes->delete('(:num)', 'Admin\Menu::delete/$1');
});

// Grouped Filter Greenhouse
$routes->group('admin/greenhouse', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin\Greenhouse::index');
    $routes->get('create', 'Admin\Greenhouse::create');
    $routes->post('save', 'Admin\Greenhouse::save');
    $routes->get('edit/(:segment)', 'Admin\Greenhouse::edit/$1');
    $routes->post('update/(:segment)', 'Admin\Greenhouse::update/$1');
    $routes->delete('(:num)', 'Admin\Greenhouse::delete/$1');
});

// Grouped Filter User
$routes->group('admin/users', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin\User::index');
    $routes->get('create', 'Admin\User::create');
    $routes->post('save', 'Admin\User::save');
    $routes->get('edit/(:segment)', 'Admin\User::edit/$1');
    $routes->post('update/(:segment)', 'Admin\User::update/$1');
    $routes->delete('(:num)', 'Admin\User::delete/$1');
});

// Auth
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
