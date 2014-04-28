<?php

include_once('header.php');

<<<<<<< HEAD
=======
$sth = $mysql->prepare("SELECT * FROM `instructors`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$instructors = $sth->fetch();

$smarty->assign("instructors", $instructors);

>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
$smarty->display('home/bm/a_course_history.tpl');

require($file . 'footer.php');

?>