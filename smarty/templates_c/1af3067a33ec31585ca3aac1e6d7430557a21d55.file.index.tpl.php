<?php /* Smarty version Smarty-3.1.12, created on 2014-04-27 21:50:31
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26903535d5cb1c092e7-78632767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af3067a33ec31585ca3aac1e6d7430557a21d55' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\index.tpl',
      1 => 1398628228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26903535d5cb1c092e7-78632767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535d5cb1c76902_43437998',
  'variables' => 
  array (
    'file' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d5cb1c76902_43437998')) {function content_535d5cb1c76902_43437998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	
	<a href="add_instructor.php">
	
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 200px;">New Instructor</button>
		
	</a>
	
	<br />
	
	<br />
	
	<a href="add_course.php">
	
		<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 200px;">New Class</button>
	
	</a>
	
	<br />
	
	<br />
	
</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>