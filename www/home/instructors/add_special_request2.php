<?php

include_once('header.php');

if(!isset($_POST['course_code']) || !isset($_POST['title']) || !isset($_POST['justification'])) {
	
	$array = array("message" => "Please fill out all the requested data", "AddRequest" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("INSERT INTO `special_request` (`user_id`, `course_code`, `title`, `justification`) VALUES (:user_id, :course_code, :title, :justification)");

	$sth->execute(array("user_id" => $_SESSION['user_id'], "course_code" => $_POST'course_code'], "title" => $_POST['title'], "justification" => $_POST['justification']));

	if($sth) {
		
		$array = array("message" => "Instructor Added", "AddRequest" => "true");
				
		echo json_encode($array);
		
		exit();
		
	} else {
		
		$array = array("message" => "Something Went Wrong Please Contact Support or Try Again", "AddRequest" => "false");
				
		echo json_encode($array);
		
		exit();
		
	}
	
?>
