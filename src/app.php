<?php

use DI\Container as Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
$mustache = new Mustache_Engine(array('entity_flags' => ENT_QUOTES));
$container->set("mustache", $mustache);

AppFactory::setContainer($container);
$app = AppFactory::create();
require_once __DIR__ . "/routes/auth.php";
