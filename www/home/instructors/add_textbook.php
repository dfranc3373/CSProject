<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `courses` WHERE `course_id` in (SELECT `course_id` FROM `teaches` WHERE `user_id` = '".$_SESSION['user_id']."')");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetchAll();

$smarty->assign("courses", $courses);

$smarty->display('home/instructors/add_book.tpl');

require($file . 'footer.php');

?>
