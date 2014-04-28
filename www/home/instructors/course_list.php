<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT * FROM `courses` WHERE `course_id` in (SELECT `course_id` FROM `teaches` WHERE `user_id` = '".$_SESSION['user_id']."')");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetchAll();

foreach($courses as $c) {

	$sth1 = $mysql->prepare("SELECT * FROM `textbooks` WHERE `textbook_id` in (SELECT `textbook_id` FROM `course_textbooks` WHERE `course_id` = '".$c->course_id."')");

	$sth1->setFetchMode(PDO::FETCH_OBJ);

	$sth1->execute();

	$books = $sth1->fetchAll();

	$c->textbooks = $books;

}

$smarty->assign("courses", $courses);

$smarty->display('home/instructors/course_list.tpl');

require($file . 'footer.php');

?>
