<?php

include("header.php");

if(!isset($_POST['username']) || $_POST['username'] == "" || !isset($_POST['password']) || $_POST['password'] == "") {//check if password and email set

		header("Location: index.php");

		exit();
	
}

$sth = $mysql->prepare("SELECT * FROM `users` WHERE `username` = :username");

$sth->execute(array(":username" => $_POST['username']));

if($sth->rowCount() != 1) {
	
	header("Location:loginpage.php?error=User_Not_Registered&username=".$_POST['username']);
	
	exit();
	
}

$string1 = "vnr3uh43h983hfhhuhf548";//password
$string2 = "pleasedontmakeamess";
$password = $_POST['password'];
$password = md5($password);//md5
$password = md5($string1.md5($string1.$password.$string2));//add the extra info

$password_check = "SELECT `password` FROM `users` WHERE `username` = :username";

$sth = $mysql->prepare($password_check);

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute(array("username" => $_POST['username']));

$password_from_database = $sth->fetch();

if($password == $password_from_database->password) {
	
	$_SESSION['logged_in'] = true;
	
	$_SESSION['username'] = $mysql->quote($_POST['username']);
	
	$sth = $mysql->prepare("SELECT `user_id` FROM `users` WHERE `username` = :username");
	
	$sth->setFetchMode(PDO::FETCH_OBJ);

	$sth->execute(array("username" => $_POST['username']));

	$user_id = $sth->fetch()->user_id;
	
	$_SESSION['user_id'] = $user_id;
	
	header("Location: home/index.php");
	
	exit();
	
} else {
	
	header("Location: index.php");	
	
}

?>