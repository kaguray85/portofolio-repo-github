<?php
// core/Router.php

class Router
{
    private array $routes = [];

    // ── Registration ──────────────────────────

    public function get(string $path, string $handler): void
    {
        $this->routes[] = ['GET', $path, $handler];
    }

    public function post(string $path, string $handler): void
    {
        $this->routes[] = ['POST', $path, $handler];
    }

    // ── Dispatching ───────────────────────────

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Strip the subfolder prefix so routes are relative
        $base   = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
        $uri    = '/' . ltrim(substr($uri, strlen($base)), '/');
        $uri    = ($uri === '') ? '/' : $uri;

        foreach ($this->routes as [$routeMethod, $routePath, $handler]) {
            // Convert :param placeholders to regex
            $pattern = preg_replace('#:([a-z]+)#', '([^/]+)', $routePath);
            $pattern = '#^' . $pattern . '$#i';

            if ($method === $routeMethod && preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // remove full-match
                [$controllerName, $action] = explode('@', $handler);

                $controllerFile = APP_PATH . '/controllers/' . $controllerName . '.php';

                if (!file_exists($controllerFile)) {
                    $this->abort(500, "Controller not found: {$controllerName}");
                }

                require_once $controllerFile;

                $controller = new $controllerName();

                if (!method_exists($controller, $action)) {
                    $this->abort(500, "Action not found: {$action}");
                }

                call_user_func_array([$controller, $action], $matches);
                return;
            }
        }

        $this->abort(404, 'Page not found.');
    }

    // ── Helpers ───────────────────────────────

    private function abort(int $code, string $message): void
    {
        http_response_code($code);
        echo "<h1>{$code}</h1><p>{$message}</p>";
        exit;
    }
}
