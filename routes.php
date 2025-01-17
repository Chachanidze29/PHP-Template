<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\HomeController;

SimpleRouter::get('/', [HomeController::class, 'index']);
