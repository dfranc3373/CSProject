<?php

include_once('header.php');

if(!isset($_POST['course']) || !isset($_POST['section']) || !isset($_POST['section_capacity']) || !isset($_POST['start_time']) || !isset($_POST['end_time']) || !isset($_POST['building']) || !isset($_POST['room']) || !isset($_POST['room_capacity']) || !isset($_POST['enrollment']) || !isset($_POST['ta_grader']) || !isset($_POST['ta_hour']) || !isset($_POST['catalog_year']) || !isset($_POST['academic_year'])) {
	
	$array = array("message" => "Please fill out all the requested data", "ClassAdded" => "false");
				
	echo json_encode($array);
	
	exit();
	
}

	$sth = $mysql->prepare("INSERT INTO `courses` (`course`, 'section', 'section_capacity', 'start_time', 'end_time', 'building', 'room', 'room_capacity', 'enrollment', 'ta_grader', 'ta_hour', 'catalog_year', 'academic_year') VALUES (:course, :section, :section_capacity, :start_time, :end_time, :building, :room, :room_capacity, :enrollment, :ta_grader, :ta_hour, :catalog_year, :academic_year)");

	$sth->execute(array("course" => $_POST['course'], "section" => $_POST['section'], "section_capacity" => $_POST['section_capacity'], "start_time" => $_POST['start_time'], "end_time" => $_POST['end_time'], "building" => $_POST['building'], "room" => $_POST['room'], "room_capacity" => $_POST['room_capacity'], "enrollment" => $_POST['enrollment'], "ta_grader" => $_POST['ta_grader'], "ta_hour" => $_POST['ta_hour'], "catalog_year" => $_POST['catalog_year'], "academic_year" => $_POST['academic_year']));
	
	if($sth) {
		
		$course_id = $sth->lastInsertId();
		
		$instructors_array = array();
		
		$a = 0;
		
		foreach($_POST['instructors'] as $i) {
			
			$instructor_query = $mysql->prepare("SELECT * FROM `instructors` WHERE `intructor_id` = :instructor_id");
			
			$instructor_query->setFetchMode(PDO::FETCH_OBJ);
			
			$instructor_query->execute(array("instructor_id" => $i));
			
			$instructor = $instructor_query->fetch();
			
			$instructor_add = $mysql->prepare("INSERT INTO `teaches` ('user_id', 'course_id'), VALUES(:user_id, :course_id)");
			
			$instructor_add->execute(array("user_id" => $instructor->user_id, "course_id" => $course_id));
			
			$instructors_array[$a] = $instructor_add;
			
			$a++;
			
		}
		
		$check = false;
		
		if($a == 0 || count(array_keys($instructors_array, true)) == count($instructors_array)) {
			
			$check = true;
			
		}
		
		if($check && $sth) {
		
			$array = array("message" => "Course Added", "CourseAdded" => "true");
					
			echo json_encode($array);
			
			exit();
			
		} else {
			
			$array = array("message" => "Course Added but could not add instructors pleace try again", "CourseAdded" => "false");
				
			echo json_encode($array);
		
			exit();	
			
		}
		
	} else {
		
		$array = array("message" => "Something Went Wrong Please Contact Support or Try Again", "CourseAdded" => "false");
				
		echo json_encode($array);
		
		exit();
		
	}
	
?>