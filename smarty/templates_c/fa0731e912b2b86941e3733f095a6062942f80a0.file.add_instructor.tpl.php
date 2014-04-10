<?php /* Smarty version Smarty-3.1.12, created on 2014-04-09 20:31:23
         compiled from "/var/www/database/smarty/templates/home/add_instructor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17745139355332f8f8de6689-63153642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0731e912b2b86941e3733f095a6062942f80a0' => 
    array (
      0 => '/var/www/database/smarty/templates/home/add_instructor.tpl',
      1 => 1397089877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17745139355332f8f8de6689-63153642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5332f8f8df9c54_26095336',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5332f8f8df9c54_26095336')) {function content_5332f8f8df9c54_26095336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<h1>Add Instructor</h1>

<div style="width: 800px; font-size: 30px;" align="center">
		
		<form method="POST" action="add_instructor2.php">
		
		<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname">
		
		Lastname:
		
		<br />
		
		<input type="text" id="lastname" name="lastname" class="form-control">
		
		Username:
		
		<br />
		
		<input type="text" id="username" name="username" class="form-control">
		
		Password:
		
		<br />
		
		<input type="text" id="password" name="password" class="form-control">
		
		Email:
		
		<br />
		
		<input type="text" id="email" name="email" class="form-control">
		
		Type:
		
		<br />
		
		<input type="text" id="type" name="type" class="form-control">
		
		Title:
		
		<br />
		
		<input type="text" id="title" name="title" class="form-control">
		
		Tenured:
		
		<br />
		
		<input type="text" id="tentured" name="tenured" class="form-control">
		
		<br />
		
		<input type="submit" value="Add Proffessor">
		
	</form>
	
	</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>