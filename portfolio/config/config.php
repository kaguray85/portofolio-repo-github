<?php
// ─────────────────────────────────────────────
//  Application Configuration
// ─────────────────────────────────────────────

define('APP_NAME',    'Muhammad Khaliz Hakam — Portfolio');
define('APP_URL',     'http://localhost/portfolio/public');
define('APP_VERSION', '1.0.0');

// ── Database ──────────────────────────────────
define('DB_HOST',     'localhost');
define('DB_PORT',     '3306');
define('DB_NAME',     'portfolio');
define('DB_USER',     'root');
define('DB_PASS',     '');
define('DB_CHARSET',  'utf8mb4');

// ── Paths ─────────────────────────────────────
define('ROOT_PATH',   dirname(__DIR__));
define('APP_PATH',    ROOT_PATH . '/app');
define('CORE_PATH',   ROOT_PATH . '/core');
define('VIEW_PATH',   APP_PATH  . '/views');
define('STORAGE_PATH',ROOT_PATH . '/storage');

// ── Error Reporting (set to 0 in production) ──
error_reporting(E_ALL);
ini_set('display_errors', 1);
