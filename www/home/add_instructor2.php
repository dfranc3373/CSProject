<?php

/*
 * 				var json = jsonParse(result);
            	
            	if(json.InstructorAdded == "true") {
 * 
 * 					alert(json.message);
 * 
            	} else {
            		
            		alert(json.message);
            		
            	}
 */

include_once('header.php');

if(!isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email']) || !isset($_POST['type']) || !isset($_POST['title']) || !isset($_POST['tenured'])) {
	
	$array = array("message" => "Please fill out all the requested data", "InstructorAdded" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$string1 = "vnr3uh43h983hfhhuhf548";//password
	$string2 = "pleasedontmakeamess";
	$password = $_POST['password'];
	$password = md5($password);//md5
	$password = md5($string1.md5($string1.$password.$string2));//add the extra info

	$sth = $mysql->prepare("INSERT INTO `users` ('username', 'password', 'firstname', 'lastname', 'email') VALUES (:username, :password, :firstname, :lastname, :email)");

	$sth->execute(array("username" => $_POST['username'], "password" => $password, "firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'], "email" => $_POST['email']));
	
	$id = $sth->lastInsertId();
	
	$instructor = $mysql->prepare("INSERT INTO `instructors` ('user_id', 'type', 'title', 'tenured', 'distribution_preference', 'date_joined') VALUES ('".$id."', :type, :title, :tenured, '1', '".date("m/d/y", time())."')");
	
	$instructor->execute(array("username" => $_POST['username'], "password" => $password, "firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'], "email" => $_POST['email']));
	
	if($sth && $instructor) {
		
		$array = array("message" => "Instructor Added", "InstructorAdded" => "true");
				
		echo json_encode($array);
		
		exit();
		
	} else {
		
		$array = array("message" => "Something Went Wrong Please Contact Support or Try Again", "InstructorAdded" => "false");
				
		echo json_encode($array);
		
		exit();
		
	}
	
?>