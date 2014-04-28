<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 05:26:57
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\a_course_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30977535dca816f0429-76445396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8c9132583905ff734cbe553214a1af29d485d0a' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\a_course_history.tpl',
      1 => 1398654876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30977535dca816f0429-76445396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535dca81765744_98084155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535dca81765744_98084155')) {function content_535dca81765744_98084155($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
				showMsg(data.message, data.InstructorAdded );
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
	

		<input type="submit" value="Add Course" class="btn btn-primary" style="margin-top:15px;">
		
	</form>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>