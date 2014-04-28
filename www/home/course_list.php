<?php

include_once('header.php');

/*// how many rows to show per page
$rowsPerPage = 15;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
    $pageNum = $_GET['page'];
    
    if($pageNum < 1) {
    
    	header("Location: index.php");
		
		exit();
    
    }//end page check
    
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

$sth = $mysql->prepare("SELECT * FROM `courses` ORDER BY `academic_year` DESC LIMIT $offset, $rowsPerPage");*/

$sth = $mysql->prepare("SELECT * FROM `courses`");

$sth->setFetchMode(PDO::FETCH_OBJ);

$sth->execute();

$courses = $sth->fetchAll();

$smarty->assign("courses", $courses);

$smarty->display('home/course_list.tpl');

require($file . 'footer.php');

?>
