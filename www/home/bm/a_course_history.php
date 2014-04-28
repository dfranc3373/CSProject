<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `instructors`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$instructors = $sth->fetch();

$smarty->assign("instructors", $instructors);

$smarty->display('home/bm/a_course_history.tpl');

require($file . 'footer.php');

?>