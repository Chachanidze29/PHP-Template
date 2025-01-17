<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__.'/../routes.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controllers');

SimpleRouter::start();
