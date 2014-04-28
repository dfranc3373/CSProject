<?php

include_once('header.php');

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
$sth = $mysql->prepare("SELECT * FROM `instructors`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$instructors = $sth->fetch();

$smarty->assign("instructors", $instructors);

>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
$smarty->display('home/bm/a_course_history.tpl');

require($file . 'footer.php');

?>