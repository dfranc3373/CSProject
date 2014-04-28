<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 09:48:04
         compiled from "/var/www/database/smarty/templates/home/course_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:845947602535e26ed26fa67-83801858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77689d1ae24476f010b5160e26f43df7423d0a90' => 
    array (
      0 => '/var/www/database/smarty/templates/home/course_list.tpl',
      1 => 1398692880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845947602535e26ed26fa67-83801858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e26ed2a0564_10250548',
  'variables' => 
  array (
    'file' => 0,
    'courses' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e26ed2a0564_10250548')) {function content_535e26ed2a0564_10250548($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
jquery.tablesorter.js"></script>

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
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<tr> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
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
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->room_capacity;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->enrollment;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->ta_grader;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->ta_hours;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->catalog_year;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->academic_year;?>
</td>
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