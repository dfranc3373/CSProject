<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `courses`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetch();

$smarty->assign("courses", $courses);

$smarty->display('home/course_list.php');

require($file . 'footer.php');

?>
