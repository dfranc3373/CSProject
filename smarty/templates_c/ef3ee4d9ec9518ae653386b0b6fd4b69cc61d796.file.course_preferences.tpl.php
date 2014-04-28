<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 10:05:20
         compiled from "/var/www/database/smarty/templates/home/instructors/course_preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215875241535e30e448df52-67791543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3ee4d9ec9518ae653386b0b6fd4b69cc61d796' => 
    array (
      0 => '/var/www/database/smarty/templates/home/instructors/course_preferences.tpl',
      1 => 1398693917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215875241535e30e448df52-67791543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e30e45829b8_56304946',
  'variables' => 
  array (
    'file' => 0,
    'courses' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e30e45829b8_56304946')) {function content_535e30e45829b8_56304946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/instructors/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
jquery.tablesorter.js"></script>

<div align="center">

<script>
	
	$( document ).ready(function() {

        	$("#myTable").tablesorter({ sortList: [[13,1]] });

	});

function updatePreferences() {

var courses = [<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
, <?php } ?>];

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
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<tr class="course"> 
    <td class="course_id"><?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->course;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->section;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->section_capacity;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->start_time;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->end_time;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->building;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->room;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->ta_hours;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->catalog_year;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->academic_year;?>
</td>
    <td>

<select class="preference_number">

 <option value="1" <?php if ($_smarty_tpl->tpl_vars['c']->value->preference==1){?> selected="selected"<?php }?>>1</option>

<option value="2" <?php if ($_smarty_tpl->tpl_vars['c']->value->preference==2){?> selected="selected"<?php }?>>2</option>

<option value="3" <?php if ($_smarty_tpl->tpl_vars['c']->value->preference==3){?> selected="selected"<?php }?>>3</option>

</select></td>
</tr>

<?php } ?>
</tbody> 
</table>


</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
<?php }} ?>