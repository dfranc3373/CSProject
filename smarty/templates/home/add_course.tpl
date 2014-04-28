{include file="home/header.tpl"}

<div align="center">

<script>
	
	$( document ).ready(function() {
		$('#addCourse').submit(function (event) {
			event.preventDefault();
			if (checkValid()==true){
				sendData();
			}
		});
	});
	
	function checkValid(){
		var valid = true;
		$( ".tableinput" ).each(function() {
			if ($( this ).val() == ""){
				showMsg("Please fill in all fields",false);
				valid=false;
			}
		});
		return valid;
	}

	function sendData(){
		dataString = $("#addCourse").serialize();
		$.ajax({
			type:"POST",
			url:"./add_course2.php",
			data:dataString,
			dataType: 'json',

			success:function (data) {
				showMsg(data.message, data.CourseAdded);
			}
		});
	}
	
	function showMsg(msg, status){
		var color = "#f00";
		if (status){
			color = "#0f0";
		}
		
		$("#results").hide();
		$("#result").html(msg);
		$("#result").css({ "background-color": color})
		$("#results").show("slow");
	}
</script>

<div id="result" style="text-align:center;"></div>


<h1>Add Course</h1>

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:150px; text-align:right; }
</style>

<form method="POST" action="add_course2.php" id="addCourse" >
<table>
	<tr>
		<td class="tablelable">
			Course
		</td>
		<td>
			<input type="text" id="course" name="course" class="form-control tableinput">
		</td>
		
		
		<td class="tablelable">
			Section
		</td>
		<td>
			<input type="text" id="section" name="section" class="form-control tableinput">
		</td>

		<td class="tablelable">
			Title
		</td>
		<td>
			<input type="text" id="title" name="title" class="form-control tableinput">
		</td>

		<td class="tablelable">
			Semester
		</td>
		<td>
			<input type="text" id="semester" name="semester" class="form-control tableinput">
		</td>

	</tr>
	
	<tr>
		<td class="tablelable">
			Section Capacity
		</td>
		<td>
			<input type="text" id="section_capacity" name="section_capacity" class="form-control tableinput">
		</td>
		
		<td class="tablelable">
			Room Capacity
		</td>
		<td>
			<input type="text" id="room_capacity" name="room_capacity" class="form-control tableinput">
		</td>
	</tr>
	
	<tr>
		<td class="tablelable">
			Enrollment
		</td>
		<td>
			<input type="text" id="enrollment" name="enrollment" class="form-control tableinput">
		</td>
	</tr>
	
	<tr>
		<td class="tablelable">
			Building
		</td>
		<td>
			<input type="text" id="building" name="building" class="form-control tableinput">
		</td>
		
		<td class="tablelable">
			Room 
		</td>
		<td>
			<input type="text" id="room" name="room" class="form-control tableinput">
		</td>
	</tr>
	
	<tr>
		<td class="tablelable">
			Start Time
		</td>
		<td>
			<input type="text" id="start_time" name="start_time" class="form-control tableinput">
		</td>
		<td class="tablelable">
			End Time
		</td>
		<td>
			<input type="text" id="end_time" name="end_time" class="form-control tableinput">
		</td>
	</tr>
	
		<tr>
		<td class="tablelable">
			Ta Name
		</td>
		<td>
			<input type="text" id="ta_grader" name="ta_grader" class="form-control tableinput">
		</td>
		<td class="tablelable">
			Ta Hour
		</td>
		<td>
			<input type="text" id="ta_hour" name="ta_hour" class="form-control tableinput">
		</td>
	</tr>
	
		<tr>
		<td class="tablelable">
			Catalog Year
		</td>
		<td>
			<input type="text" id="catalog_year" name="catalog_year" class="form-control tableinput">
		</td>
		<td class="tablelable">
			Academic Year
		</td>
		<td>
			<input type="text" id="academic_year" name="academic_year" class="form-control tableinput">
		</td>
	</tr>
</table>

<br />

Choose Proffesors for the Class:

<br />

<br />

{foreach from=$instructors item=i}

<input type="checkbox" value="{$i->user_id}" class="tableinput" name="instructors[]"> {$i->title} {$i->firstname} {$i->lastname}

{/foreach}

<br />

<br />

<br />

<br />

		<input type="submit" value="Add Course" class="btn btn-primary" style="margin-top:15px;">
		
	</form>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
