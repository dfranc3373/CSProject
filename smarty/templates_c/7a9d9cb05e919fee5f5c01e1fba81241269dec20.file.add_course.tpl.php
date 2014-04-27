<?php /* Smarty version Smarty-3.1.12, created on 2014-04-27 21:50:35
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\add_course.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20715535d5f8ba9ceb8-63503641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9d9cb05e919fee5f5c01e1fba81241269dec20' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\add_course.tpl',
      1 => 1398625849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20715535d5f8ba9ceb8-63503641',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535d5f8bad7833_14624482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d5f8bad7833_14624482')) {function content_535d5f8bad7833_14624482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<h1>Add Instructor</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="add_instructor2.php">

<!--
	<table>
		<tr>
			<td)>
				<input type="text" id="userid" name="userid" class="form-control" placeholder="User ID">
			</td>
			<td>
				<input type="text" id="username" name="username" class="form-control" placeholder="Username:">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" id="username" name="username" class="form-control" placeholder="Username:">
			</td>
			<td>
				<input type="text" id="password" name="password" class="form-control" placeholder=Password:"">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" id="email" name="email" class="form-control" placeholder="Email:">
			</td>
			<td>
				<input type="text" id="type" name="type" class="form-control">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" id="title" name="title" class="form-control">
			</td>
			<td>
				<input type="text" id="tentured" name="tenured" class="form-control">
			</td>
		</tr>
	</table>
-->

<style>
.tableinput{ height:25px; width: 125px; margin:2px; padding:2px ;}
</style>

	
<table>
	<tr>
		<td width=100px>
			User ID
		</td>
		<td>
			<input type="text" id="userid" name="userid" class="form-control tableinput">
		</td>
	</tr>
</table>


		<input type="submit" value="Add Professor" class="btn btn-primary">
		
	</form>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>