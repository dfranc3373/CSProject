{include file="home/header.tpl"}

<link rel="stylesheet" href="{$file}themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="{$file}jquery.tablesorter.js"></script>

<div align="center">

<script>
	
	$( document ).ready(function() {

        	$("#myTable").tablesorter({ sortList: [[13,1]] });

	});

</script>

<div id="result" style="text-align:center;"></div>

<h1>Course List</h1>

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:150px; text-align:right; }
</style>

<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th>CourseID</th> 
    <th>Course</th> 
    <th>Section</th> 
    <th>Capacity</th> 
    <th>Start Time</th>
    <th>End Time</th>
    <th>Building</th>
    <th>Room</th>
    <th>Room Capacity</th>
    <th>Enrollment</th>
    <th>TA Grader</th>
    <th>TA Hours</th>
    <th>Catelog Year</th>
    <th>Acedemic Year</th>
</tr> 
</thead> 
<tbody>
{foreach from=$courses item=c}
<tr> 
    <td>{$c->course_id}</td> 
    <td>{$c->course}</td> 
    <td>{$c->section}</td> 
    <td>{$c->section_capacity}</td> 
    <td>{$c->start_time}</td>
    <td>{$c->end_time}</td> 
    <td>{$c->building}</td>
    <td>{$c->room}</td>
    <td>{$c->room_capacity}</td>
    <td>{$c->enrollment}</td>
    <td>{$c->ta_grader}</td>
    <td>{$c->ta_hours}</td>
    <td>{$c->catalog_year}</td>
    <td>{$c->academic_year}</td>
</tr>

{/foreach}
</tbody> 
</table>


</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
