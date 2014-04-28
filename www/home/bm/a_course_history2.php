<?php

include_once('header.php');

<<<<<<< HEAD
$instructor = $_GET['instructor'];
$years = $_GET['years'];

echo $instructor;
echo $years;

=======
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
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