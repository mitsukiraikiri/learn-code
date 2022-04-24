<?php

$routes = [];

function route(string $path, callable $callback)
{
  global $routes;
  $routes[$path] = $callback;
}

function run()
{
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  foreach ($routes as $path => $callback) {
    if ($path != $uri) continue;
    $callback();
  }
}

route('/', function () {
  echo "Hello World";
});

route('/about', function () {
  require 'pages/about.php';
});

run();
