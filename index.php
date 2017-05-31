<?php

namespace Application;

require __DIR__ . '/vendor/autoload.php';

use Application\Core\Route;
use Application\Core\ErrorHandler;
use Application\Core\Config;
use Application\Core\AppException;

ErrorHandler::handleErrors(ErrorHandler::getConfigElement('app_in_production'));

// умышленная ошибка - вызывает исключение
// strpos();

$route = new Route();
$route->start();
