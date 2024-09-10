<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;    // serve the requested resource as-is.
}

function dum(...$vars)
{
  echo '<pre>';
  var_dump(...$vars);
  echo '</pre>';
}

spl_autoload_register(function ($class) {
  $class = substr($class, 4);
  require_once "src/$class.php";
});

require 'routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();

if ($match) {
  if (is_callable($match)) {
    call_user_func($match['action']);
  } elseif (is_array($match['action']) && count($match['action']) === 2) {
    $class = $match['action'][0];
    $controller = new $class();
    $method = $match['action'][1];
    $controller->$method();
  }
} else {
  http_response_code(404);
}
