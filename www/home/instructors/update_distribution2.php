<?php

include_once('header.php');

if(!isset($_POST['distribution'])) {
	
	$array = array("message" => "Please fill out all the requested data", "UpdateDistribution" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("UPDATE `instructors` SET `distribution_preference` = :d WHERE `user_id` = '".$_SESSION['user_id']."'");

	$sth->execute(array("d" => $_POST['distribution']));

	if($sth) {
		
		$array = array("message" => "Distribution Updated",  "UpdateDistribution" => "true");
				
		echo json_encode($array);
		
		exit();
		
	} else {
		
		$array = array("message" => "Something Went Wrong Please Contact Support or Try Again", "UpdateDistribution" => "false");
				
		echo json_encode($array);
		
		exit();
		
	}
	
?>
