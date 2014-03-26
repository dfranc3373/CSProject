<?php

$file = "";//for css and images and include

$nav = "";

require_once("include.php");

@session_start();

$smarty->assign("file", $file);

$smarty->assign("nav", $nav);

$logged_in = (isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false);

$smarty->assign('logged_in', $logged_in);

$username = "";

$user_id = "";

if($logged_in) {
	
	$username = $_SESSION['username'];
	$smarty->assign('username', $username);
	
	$user_id = $_SESSION['user_id'];
	$smarty->assign('user_id', $user_id);

	header("Location: ./home/");

}

$smarty->assign("username", $username);

$smarty->assign("user_id", $user_id);

?>