<?php

namespace App;

use App\Route;


class Router
{
  public static $routes = [];
  public $path;
  public $method;
  public function __construct($path, $method)
  {
    $this->path = parse_url($path, PHP_URL_PATH);
    $this->method = $method;
  }

  public function match()
  {
    foreach (self::$routes as $route) {
      preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $route->path, $paramNames);

      $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $route->path);
      $pattern = '#^' . $pattern . '$#';

      if ($route->method === $this->method && preg_match($pattern, $this->path, $matches)) {
        array_shift($matches);

        $params = [];
        foreach ($paramNames[1] as $index => $paramName) {
          $params[$paramName] = $matches[$index];
        }

        $route->params = $params;
        return $route;
      }
    }

    return false;
  }

  public static function addRoute($method, $path, $action)
  {
    self::$routes[] = new Route($method, $path, $action);
  }
}

