<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 07:36:48
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\instructors\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19718535de8f018dcf4-12271491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ad5ec89410a5ca25ea9f665cb264c75ecd0cfa' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\instructors\\index.tpl',
      1 => 1398644147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19718535de8f018dcf4-12271491',
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
  'unifunc' => 'content_535de8f022a110_05632608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535de8f022a110_05632608')) {function content_535de8f022a110_05632608($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	
	<a href="update_course_preferences.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Update Course Preferences</button>
	</a>
	
	<br />
	<br />
	
	<a href="update_disctribution.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Update Load Distribution Preferences</button>
	</a>
	
	<br />
	<br />
	
	<a href="add_special_request.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Add Special Course Request</button>
	</a>

	<br />
	<br />
	
	<a href="course_list.php">
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 400px;">Show Courses / Edit Textbooks</button>
	</a>
	
	<br />
	<br />
	
	
</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>