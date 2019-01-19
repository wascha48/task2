<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/componets/Router.php');
require_once(ROOT.'/componets/db.php');

$router = new Router();
$router->run();