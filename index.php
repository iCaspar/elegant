<?php declare(strict_types=1);

use Slim\Factory\AppFactory;

require './vendor/autoload.php';

$elegant = AppFactory::create();
$elegant->addRoutingMiddleware();
$elegant->addErrorMiddleware(true, false, false);

require './routes/web.php';
$elegant->run();
