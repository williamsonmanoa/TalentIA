<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'DashboardController::index'); // Ensure this matches your controller name
$routes->get('/auth', 'Auth::index'); // The login page
$routes->post('/auth/login', 'Auth::login'); // Process login form
$routes->get('/auth/logout', 'Auth::logout'); // Process logout

$routes->group('users', function($routes) {
    $routes->get('/', 'UserController::index'); // List users
    $routes->get('create', 'UserController::create'); // Form to create a new user
    $routes->post('store', 'UserController::store'); // Handle new user submission
    $routes->get('edit/(:num)', 'UserController::edit/$1'); // Form to edit user
    $routes->post('update/(:num)', 'UserController::update/$1'); // Handle user update
    $routes->get('delete/(:num)', 'UserController::delete/$1'); // Handle user deletion
});

$routes->group('skills', function($routes) {
    $routes->get('/', 'SkillController::index'); // List skills
    $routes->get('create', 'SkillController::create'); // Form to create a new skill
    $routes->post('store', 'SkillController::store'); // Handle new skill submission
    $routes->get('edit/(:num)', 'SkillController::edit/$1'); // Form to edit skill
    $routes->post('update/(:num)', 'SkillController::update/$1'); // Handle skill update
    $routes->get('delete/(:num)', 'SkillController::delete/$1'); // Handle skill deletion
});

$routes->group('user_skills', function($routes) {
    $routes->get('/', 'UserSkillController::index'); // List user skills
    $routes->get('create', 'UserSkillController::create'); // Form to create a new user skill
    $routes->post('store', 'UserSkillController::store'); // Handle new user skill submission
    $routes->get('edit/(:num)', 'UserSkillController::edit/$1'); // Form to edit user skill
    $routes->post('update/(:num)', 'UserSkillController::update/$1'); // Handle user skill update
    $routes->get('delete/(:num)', 'UserSkillController::delete/$1'); // Handle user skill deletion
});

// API routes (if applicable)
$routes->group('api', function($routes) {
    $routes->get('users', 'UserController::index');
    $routes->get('projects', 'ProjectController::index');
});

// A simple route for testing
$routes->get('hello', function() {
    return "Hello, World!";
});