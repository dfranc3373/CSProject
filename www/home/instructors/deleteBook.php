<?php

include_once('header.php');

if(!isset($_POST['book_id'])) {
	
	$array = array("message" => "Please fill out all the requested data", "Done" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("DELETE FROM `course_textbooks` WHERE `textbook_id` = :book_id");

	$sth->execute(array("book_id" => $_POST['book_id']));

	$sth1 = $mysql->prepare("DELETE FROM `textbooks` WHERE `textbook_id` = :book_id");

	$sth1->execute(array("book_id" => $_POST['book_id']));

	$array = array("message" => "Deleted",  "Done" => "true");

	echo json_encode($array);

?>
