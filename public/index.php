<?php


define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(dirname(__FILE__)));
define("APP", ROOT.DS."app");
define("LIB", APP.DS."lib");
define("CONFIG", APP.DS."config");
define("CONTROLLER", ROOT.DS."controller");
define("MODEL", ROOT.DS."model");
define("VIEW", ROOT.DS."view");


session_start();
require LIB.DS.'autoloader.php';
require CONFIG.DS.'config.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace("mini-framework/", "", $uri);
$uri = urldecode(trim($uri, "/"));
App::run($uri);
//echo Config::get("site_name");

?>