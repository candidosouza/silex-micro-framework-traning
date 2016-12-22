<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application();

$app['debug'] = true;

use WhoopsSilex\WhoopsServiceProvider;
$app->register(new WhoopsServiceProvider);