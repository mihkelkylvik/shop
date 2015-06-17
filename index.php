<?php

mail("mihkel20@gmail.com", "Demo", "TERE YOLO.");//die();
// Project constants
define('PROJECT_NAME', 'e_pood');
define('DEFAULT_CONTROLLER', 'welcome');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
