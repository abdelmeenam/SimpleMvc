<?php

namespace itrax;

require_once "../vendor/autoload.php";

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR);
define('controllers', dirname(__DIR__) . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR);


//config
define('SERVER', "");
define('USERNAME', "");
define('PASSWORD', "");
define('DATABASE', "");
define('DOMAIN_NAME', "");


use itrax\controllers\userController;
use itrax\controllers\homeController;
use itrax\core\app;



$c = new app();
