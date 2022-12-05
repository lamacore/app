<?php

use \Lama\Router\Router;

$router = Router::getInstance();

require(__DIR__ . '/Routes/web.php');

$router->run();