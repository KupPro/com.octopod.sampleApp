<?php

require_once __DIR__.'/vendor/autoload.php';

use Octopod\Octophp\Application;

$app = new Application(__DIR__, 'app');
$app->run();