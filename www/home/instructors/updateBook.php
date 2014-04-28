<?php

include_once('header.php');

if(!isset($_POST['book_id'])) {
	
	$array = array("message" => "Please fill out all the requested data", "Done" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("UPDATE `textbooks` SET `title` = :title, `author` = :author, `edition` = :edition, `isbn` = :isbn, `publisher` = :publisher WHERE `textbook_id` = :book_id");

	$sth->execute(array("title" => $_POST['title'], "author" => $_POST['author'], "edition" => $_POST['edition'], "isbn" => $_POST['isbn'], "publisher" => $_POST['publisher'], "book_id" => $_POST['book_id']));

	$array = array("message" => "Updated",  "Done" => "true");

	echo json_encode($array);

?>
