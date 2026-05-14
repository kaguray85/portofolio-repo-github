<?php
// public/index.php — Front Controller

declare(strict_types=1);

// ── Bootstrap ────────────────────────────────────
define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR . '/config/config.php';
require_once ROOT_DIR . '/core/Database.php';
require_once ROOT_DIR . '/core/Controller.php';
require_once ROOT_DIR . '/core/Router.php';

// ── Routes ───────────────────────────────────────
$router = new Router();

// Home
$router->get('/',         'HomeController@index');

// Projects
$router->get('/projects', 'ProjectController@index');

// Contact
$router->get('/contact',  'ContactController@index');
$router->post('/contact/send', 'ContactController@send');

// ── Dispatch ─────────────────────────────────────
$router->dispatch();
