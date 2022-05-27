<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Yl\Market\Controller\IndexController;

require 'autoloader.php';

$controller = new IndexController();

$controller->index();