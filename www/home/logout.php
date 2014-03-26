<?php

$file="../";

require_once($file . "include.php");

@session_start();

$logged_in = $_SESSION['logged_in'];

if($logged_in) {
	
	session_destroy();
	
} else {
	
	header("Location:../index.php");
	
}

?>