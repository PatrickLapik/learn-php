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

switch ($_SERVER['REQUEST_URI']) {
  case '/':
    include 'views/index.php';
    break;
  case '/us':
    include 'views/us.php';
    break;
  default:
    echo '404 pleb';
}
