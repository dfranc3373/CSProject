<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `courses`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetchAll();

$smarty->assign("courses", $courses);

$smarty->display('home/course_list.tpl');

require($file . 'footer.php');

?>
