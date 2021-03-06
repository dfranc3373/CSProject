<?php

include_once('header.php');

if(!isset($_POST['course_code']) || !isset($_POST['title']) || !isset($_POST['author']) || !isset($_POST['edition']) || !isset($_POST['isbn']) || !isset($_POST['publisher'])) {
	
	$array = array("message" => "Please fill out all the requested data", "AddRequest" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("INSERT INTO `textbooks` (`title`, `author`, `edition`, `isbn`, `publisher`) VALUES (:title, :author, :edition, :isbn, :publisher)");

	$sth->execute(array("title" => $_POST['title'], "author" => $_POST['author'], "edition" => $_POST['edition'], "isbn" => $_POST['isbn'], "publisher" => $_POST['publisher']));

	$textbook_id = $mysql->lastInsertId();

	$txt = $mysql->prepare("INSERT INTO `course_textbooks` (`course_id`, `textbook_id`) VALUES(:course_id, :textbook_id)");

	$txt->execute(array("course_id" => $_POST['course_code'], "textbook_id" => $textbook_id));

	if($sth && $txt) {
		
		$array = array("message" => "Request Added", "AddRequest" => "true");
				
		echo json_encode($array);
		
		exit();
		
	} else {
		
		$array = array("message" => "Something Went Wrong Please Contact Support or Try Again", "AddRequest" => "false");
				
		echo json_encode($array);
		
		exit();
		
	}
	
?>
