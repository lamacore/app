<?php

require('../vendor/autoload.php');

use \Lama\Storage\Life;

Life::set('REQUEST_URI', '/' . trim(explode('?', $_SERVER['REQUEST_URI'])[0], '/'));
Life::set('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

Life::set('PUBLIC_DIR', __DIR__);
Life::set('ROOT_DIR', __DIR__ . '/../');
Life::set('APP_DIR', Life::get('ROOT_DIR') . '/app/');

Life::set('APP_CONFIG', require(Life::get('APP_DIR') . '/Config/App.php'));
Life::set('APP_CONFIG_DATABASE', require(Life::get('APP_DIR') . '/Config/Database.php'));
Life::set('APP_CONFIG_VIEWS', require(Life::get('APP_DIR') . '/Config/Views.php'));

require(Life::get('APP_DIR') . '/bootstrap.php');