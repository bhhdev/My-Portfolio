<?php

define('ROOT_PATH', dirname(__DIR__));

require ROOT_PATH . '/src/Controller/HomeController.php';

use App\Controller\HomeController;

$controller = new HomeController();
$controller->index();
