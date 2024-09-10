<?php
use App\Router;
use App\Controllers\PublicController;


Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/us', [PublicController::class, 'us']);
