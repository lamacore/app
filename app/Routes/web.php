<?php

use \App\Controllers\Main;

$router->set404([Main::class, 'error']);

$router->get('/', [Main::class, 'index']);