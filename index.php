<?php
/**
 * Created by PhpStorm.
 * User: Evgeni
 * Date: 08.11.2016
 * Time: 19:37
 */

//ini_set('display_errors', 1);
//error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT."/components/Router.php");

$router = new Router();
$router->run();