<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 05:11:28
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\bm\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16395535dc6e0e42d20-34111104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5bca08491ee1c6f64408ba7421ccb304382361' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\bm\\index.tpl',
      1 => 1398653705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16395535dc6e0e42d20-34111104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535dc6e0e98c44_89450063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535dc6e0e98c44_89450063')) {function content_535dc6e0e98c44_89450063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center" style="color: rgb(255, 255, 255); background: url('<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
images/angelhack.jpg') repeat fixed center 0px transparent; background-size: 100%;">

<button type="button" class="btn btn-default disabled" style="margin-top: 100px; opacity: .89;">

	<div style="text-shadow: 4px 0 10px #000000, 0 -1px 0 #000000;">

		<h1 style="font-size: 50px;">Texas Tech - Computer Science System</h1>
		
		<h2>Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>
	
	</div>
	
	</button>
	
	<br />
	<br />
	
	<a href="a_course_history.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Course History for Instructor</button>
	</a>
	
	<br />
	
	<a href="b_instructor_list.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Instructor List and Statistics</button>
	</a>
	
	<br />

	<a href="c_special_course_list.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Special Course List</button>
	</a>
	
	<br />

	<a href="d_offering_history.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Offering History for Course</button>
	</a>
	
	<br />

	<a href="e_add_course.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Professor Preferences</button>
	</a>
	
	<br />
	
	<a href="f_add_course.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Textbooks For Course</button>
	</a>
	
	<br />
	
	<a href="g_add_course.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Summer Course List</button>
	</a>
	
	<br />

	<a href="h_add_course.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Enrollment Statistics</button>
	</a>
	
	<br />
	<br />
	
</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>