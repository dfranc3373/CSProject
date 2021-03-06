<?php

include_once('header.php');

$sth = $mysql->prepare("SELECT instructors.*, users.firstname, users.lastname FROM `instructors` LEFT JOIN `users` on users.user_id = instructors.user_id");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$instructors = $sth->fetchAll();

$smarty->assign("instructors", $instructors);

$smarty->display('home/add_course.tpl');

require($file . 'footer.php');

?>
