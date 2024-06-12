<?php

require_once 'vendor/autoload.php';
require_once 'tools/utils.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = require_once __DIR__ . '/config/routes.php';