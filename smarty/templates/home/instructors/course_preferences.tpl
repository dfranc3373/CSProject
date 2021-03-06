{include file="home/instructors/header.tpl"}

<link rel="stylesheet" href="{$file}themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="{$file}jquery.tablesorter.js"></script>

<div align="center">

<script>
	
	$( document ).ready(function() {

        	$("#myTable").tablesorter({ sortList: [[13,1]] });

	});

function updatePreferences() {

var courses = [{foreach from=$courses item=c} {$c->course_id}, {/foreach}];

if(courses.length == 0) {

return;

}


var preference_numbers = [];

var i = 0;

$('.preference_number').each(function(i) { 

                   var course_id = courses[i];
                   var preference_number = $(this).val();

		   i++;

	dataString = { course_id: course_id,
                       preference_number: preference_number
		     };

		$.ajax({
			type:"POST",
			url:"update_course_preference.php",
			data:dataString,
			dataType: 'json'
		});

});

alert("Preferences Updated");

}


</script>

<div id="result" style="text-align:center;"></div>

<h1>Course List</h1>

<div align="right">

<button onclick="updatePreferences();">Save Preferences</button>

</div>

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
    <th>TA Hours</th>
    <th>Catalog Year</th>
    <th>Acedemic Year</th>
    <th>Course Preference</th>
</tr> 
</thead> 
<tbody>
{foreach from=$courses item=c}
<tr class="course"> 
    <td class="course_id">{$c->course_id}</td> 
    <td>{$c->course}</td> 
    <td>{$c->section}</td> 
    <td>{$c->section_capacity}</td> 
    <td>{$c->start_time}</td>
    <td>{$c->end_time}</td> 
    <td>{$c->building}</td>
    <td>{$c->room}</td>
    <td>{$c->ta_hours}</td>
    <td>{$c->catalog_year}</td>
    <td>{$c->academic_year}</td>
    <td>

<select class="preference_number">

 <option value="1" {if $c->preference == 1} selected="selected"{/if}>1</option>

<option value="2" {if $c->preference == 2} selected="selected"{/if}>2</option>

<option value="3" {if $c->preference == 3} selected="selected"{/if}>3</option>

</select></td>
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
