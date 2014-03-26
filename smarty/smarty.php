<?php

require_once('/home/administrator/Smarty-3.1.12/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/database/smarty/templates/');
$smarty->setCompileDir('/var/www/database/smarty/templates_c/');
$smarty->setConfigDir('/var/www/database/smarty/configs/');
$smarty->setCacheDir('/var/www/database/smarty/cache/');

?>