<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 05:58:59
         compiled from "/var/www/database/smarty/templates/home/add_course.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557674831535d926f07cce3-77001261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '868bc8d562bf9210b6bdc256c72fe2e19f9b8cfb' => 
    array (
      0 => '/var/www/database/smarty/templates/home/add_course.tpl',
      1 => 1398679125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557674831535d926f07cce3-77001261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535d926f08f992_85122502',
  'variables' => 
  array (
    'instructors' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d926f08f992_85122502')) {function content_535d926f08f992_85122502($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['instructors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>

<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->user_id;?>
" class="tableinput" name="instructors[]"> <?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->lastname;?>


<?php } ?>

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
<?php }} ?>