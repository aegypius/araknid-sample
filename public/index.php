<?php
/* --------------------------------------------------------------------
	CONSTANTS
-------------------------------------------------------------------- */
define('APP_PATH',             realpath('..'));
define('APP_CONFIG_PATH',      realpath(APP_PATH . DIRECTORY_SEPARATOR . 'config'));
define('APP_MODELS_PATH',      realpath(APP_PATH . DIRECTORY_SEPARATOR . 'models'));
define('APP_VIEWS_PATH',       realpath(APP_PATH . DIRECTORY_SEPARATOR . 'views'));
define('APP_CONTROLLERS_PATH', realpath(APP_PATH . DIRECTORY_SEPARATOR . 'controllers'));

set_include_path(
	realpath('../../../libs') . PATH_SEPARATOR .
	APP_MODELS_PATH           . PATH_SEPARATOR .
	APP_CONTROLLERS_PATH      . PATH_SEPARATOR .
	get_include_path()
);
/* --------------------------------------------------------------------
	BOOTSTRAP
-------------------------------------------------------------------- */
require_once 'Araknid.php';

Araknid::getInstance();
