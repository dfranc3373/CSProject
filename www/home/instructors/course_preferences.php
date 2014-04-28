<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT courses.*, preferences.preference FROM `courses` LEFT JOIN `preferences` on courses.course_id = preferences.course_id");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetchAll();

$smarty->assign("courses", $courses);

$smarty->display('home/instructors/course_preferences.tpl');

require($file . 'footer.php');

?>
