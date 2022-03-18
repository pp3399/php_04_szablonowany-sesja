<?php

require_once dirname(__FILE__) . '/../config.php';
//ochrona widoku
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

include _ROOT_PATH . '/app/security/check.php';

//$smarty = new Smarty();
//$smarty->assign('app_url', _APP_URL);
//$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Inna strona');

$smarty->display(_ROOT_PATH . '/app/inna_chroniona.tpl');
