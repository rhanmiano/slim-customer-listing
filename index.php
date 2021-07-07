<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/config.php';

if (file_exists($rootPath . '/.env')) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

if (getenv('ENVIRONMENT') === false) {
  echo 'Application\'s environment configuration has not been set up properly.'; die();
}

$app = new \Slim\App($config);

require 'api/routes.php';

$app->run();