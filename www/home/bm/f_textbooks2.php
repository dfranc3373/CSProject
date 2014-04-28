<?php

include_once('header.php');

$results = $mysql->prepare("select * from users");
$results->execute();

while ($row = $results->fetch(PDO::FETCH_ASSOC))
{	
	echo "User Id : {$row['user_id']} <br>".
		"Username : {$row['username']} <br>".
		"First Name : {$row['firstname']} <br>".
		"Last Name : {$row['lastname']} <br>".
		"Email : {$row['email']} <br>".
		"__________________________________<br>";
}
?>