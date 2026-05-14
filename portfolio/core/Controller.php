<?php
// core/Controller.php

class Controller
{
    /**
     * Render a view file with optional data.
     *
     * @param string $view   Dot-notation path relative to app/views/
     *                       e.g. 'home' → app/views/home.php
     *                            'layouts/header' → app/views/layouts/header.php
     * @param array  $data   Variables to extract into view scope
     */
    protected function view(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        $file = VIEW_PATH . '/' . str_replace('.', '/', $view) . '.php';

        if (!file_exists($file)) {
            http_response_code(404);
            die("View not found: {$file}");
        }

        require $file;
    }

    /**
     * Send a JSON response and exit.
     */
    protected function json(mixed $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    /**
     * Redirect to a URL.
     */
    protected function redirect(string $url): void
    {
        header("Location: {$url}");
        exit;
    }
}
