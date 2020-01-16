<?php

include './config.php';

if (true === APP_DEBUG) {
    ini_set('display_errors', 1);
}

include __DIR__ . '/database.php';
include __DIR__ . '/classes/Controller.php';
include __DIR__ . '/classes/User.php';

$page = $_GET['page'] ?? 'users';
$action = $_GET['action'] ?? 'index';

$controller = new Controller();

include __DIR__ . '/pages/_header.php';

include $controller->getRoute($page, $action);

include __DIR__ . '/pages/_footer.php';