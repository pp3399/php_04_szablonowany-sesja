<?php

define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://' . _SERVER_NAME);
define('_APP_ROOT', '/php_02_szablonowany');
define('_APP_URL', _SERVER_URL . _APP_ROOT);
define('_ROOT_PATH', dirname(__FILE__));

require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
?>