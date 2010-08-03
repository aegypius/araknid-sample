<?php
/* --------------------------------------------------------------------
   CONSTANTS
-------------------------------------------------------------------- */
define('APP_PATH',             realpath('..'));
define('APP_CONFIG_PATH',      realpath(APP_PATH . DIRECTORY_SEPARATOR . 'config'));
define('APP_LIBRARIES_PATH',   realpath(APP_PATH . DIRECTORY_SEPARATOR . 'libraries'));
define('APP_CONTROLLERS_PATH', realpath(APP_PATH . DIRECTORY_SEPARATOR . 'controllers'));
define('APP_MODELS_PATH',      realpath(APP_PATH . DIRECTORY_SEPARATOR . 'models'));

set_include_path(
   implode(PATH_SEPARATOR, array(
      realpath('../../../libs'),
      APP_LIBRARIES_PATH,
      APP_CONTROLLERS_PATH,
      APP_MODELS_PATH,
      get_include_path()
   ))
);
/* --------------------------------------------------------------------
   BOOTSTRAP
-------------------------------------------------------------------- */
require_once 'Araknid.php';

Araknid::getInstance();
