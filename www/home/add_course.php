<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `instructors`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$instructors = $sth->fetch();

$smarty->assign("instructors", $instructors);

$smarty->display('home/add_course.tpl');

require($file . 'footer.php');

?>