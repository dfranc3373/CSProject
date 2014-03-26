<?php /* Smarty version Smarty-3.1.12, created on 2014-03-26 11:59:10
         compiled from "/var/www/database/smarty/templates/home/add_instructor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17745139355332f8f8de6689-63153642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0731e912b2b86941e3733f095a6062942f80a0' => 
    array (
      0 => '/var/www/database/smarty/templates/home/add_instructor.tpl',
      1 => 1395849544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17745139355332f8f8de6689-63153642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5332f8f8df9c54_26095336',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5332f8f8df9c54_26095336')) {function content_5332f8f8df9c54_26095336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<button type="button" class="btn btn-default disabled" style="margin-top: 100px; opacity: .89;">

	<div style="text-shadow: 4px 0 10px #000000, 0 -1px 0 #000000;">

		<h1 style="font-size: 50px;">Texas Tech - Computer Science System</h1>
		
		<h2>Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>
	
	</div>
	
	</button>
	
	<br />
	
	<br />
	
	<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 200px;">New Instructor</button>
	
	<br />
	
	<br />
	
	<button align="center" type="button" class="btn btn-default btn-lg btn-block" style="max-width: 200px;">New Class</button>
	
	<br />
	
	<br />
	
</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>