<?php /* Smarty version Smarty-3.1.12, created on 2014-04-27 22:50:48
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\add_instructor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773535d5cb7367757-55152186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c11d0ea45aaa1b0d4d54d0a774ee70bb520e8d' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\add_instructor.tpl',
      1 => 1398631846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773535d5cb7367757-55152186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535d5cb73a20e7_86381713',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535d5cb73a20e7_86381713')) {function content_535d5cb73a20e7_86381713($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<h1>Add Instructor</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="add_instructor2.php">


	<table>

	</table>


<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:100px; text-align:right; }
</style>

	
<table>
	<tr>
		<td class="tablelable">
			User ID
		</td>
		<td>
			<input type="text" id="userid" name="userid" class="form-control tableinput">
		</td>
		
		
		<td class="tablelable">
			User Name
		</td>
		<td>
			<input type="text" id="username" name="username" class="form-control tableinput">
		</td>
	</tr>
	<tr>
		<td class="tablelable">
			Title
		</td>
		<td>
			<input type="text" id="title" name="title" class="form-control tableinput">
		</td>

		
		<td class="tablelable">
			Tenured
		</td>
		<td>
			<input type="text" id="tenured" name="tenured" class="form-control tableinput">
		</td>
	</tr>
	<tr>
		<td class="tablelable">
			First Name
		</td>
		<td>
			<input type="text" id="firstname" name="firstname" class="form-control tableinput">
		</td>

		<td class="tablelable">
			Last Name
		</td>
		<td>
			<input type="text" id="lastname" name="lastname" class="form-control tableinput">
		</td>
	</tr>
	<tr>
		<td class="tablelable">
			Password
		</td>
		<td>
			<input type="text" id="password" name="password" class="form-control tableinput">
		</td>
	
	
		<td class="tablelable">
			Type
		</td>
		<td>
			<input type="text" id="type" name="type" class="form-control tableinput">
		</td>
	</tr>
	<tr>
		<td class="tablelable">
			Email
		</td>
		<td colspan="3">
			<input type="text" id="email" name="email" class="form-control tableinput long">
		</td>
	</tr>
</table>


		<input type="submit" value="Add Professor" class="btn btn-primary" style="margin-top:15px;">
		
	</form>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>