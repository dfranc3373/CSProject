<?php

include_once('header.php');

if(!isset($_POST['course_id']) || !isset($_POST['preference_number'])) {

	exit();
	
}

$instructor_query = $mysql->prepare("SELECT `instructor_id` FROM `instructors` WHERE `user_id` = '".$_SESSION['user_id']."'");

$instructor_query->setFetchMode(PDO::FETCH_OBJ);

$instructor_query->execute();

$instructor_id = $instructor_query->fetch()->instructor_id;

$select = $mysql->prepare("SELECT * FROM `preferences` WHERE `instructor_id` = '".$instructor_id."' AND `course_id` = :course_id");

$select->execute(array("course_id" => $_POST['course_id']));

if($select->rowCount() == 0) {

	$sth = $mysql->prepare("INSERT INTO `preferences` (`instructor_id`, `course_id`, `preference`) VALUES (:instructor_id, :course_id, :preference)");

	$sth->execute(array("instructor_id" => $instructor_id, "course_id" => $_POST['course_id'], "preference" => $_POST['preference_number']));

	echo "New Row Created";

} else {

	$sth = $mysql->prepare("UPDATE `preferences` SET `preference` = :preference WHERE `course_id` = :course_id AND `instructor_id` = :instructor_id");

	$sth->execute(array("instructor_id" => $instructor_id, "course_id" => $_POST['course_id'], "preference" => $_POST['preference_number']));

	echo "Updated Row";

}

?>
