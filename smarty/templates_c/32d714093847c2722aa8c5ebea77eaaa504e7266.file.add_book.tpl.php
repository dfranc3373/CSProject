<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 08:40:18
         compiled from "/var/www/database/smarty/templates/home/instructors/add_book.tpl" */ ?>
<?php /*%%SmartyHeaderCode:666026226535e48a74a9474-40344121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d714093847c2722aa8c5ebea77eaaa504e7266' => 
    array (
      0 => '/var/www/database/smarty/templates/home/instructors/add_book.tpl',
      1 => 1398688813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '666026226535e48a74a9474-40344121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e48a74c4748_21544313',
  'variables' => 
  array (
    'courses' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e48a74c4748_21544313')) {function content_535e48a74c4748_21544313($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/instructors/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<script>
	
	$( document ).ready(function() {
		$('#addRequest').submit(function (event) {
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
		dataString = $("#addRequest").serialize();
		$.ajax({
			type:"POST",
			url:"./add_textbook2.php",
			data:dataString,
			dataType: 'json',

			success:function (data) {
				showMsg(data.message, data.AddRequest);
			}
		});
	}
	
	function showMsg(msg, status){
		var color = "#f00";
		if (status){
			color = "#0f0";
		}
		
		$("#result").hide();
		$("#result").html(msg);
		$("#result").css({ "background-color": color})
		$("#result").show("slow");
	}
</script>

<div id="result" style="text-align:center;"></div>


<h1>Add A Textbook</h1>

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:150px; text-align:right; }
</style>

<form method="POST" action="add_special_request2.php" id="addRequest" >
<table>
	<tr>
		<td class="tablelable">
			Course
		</td>
		<td>
<select name="course_code" class="form-control tableinput">

<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>

<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->course;?>
</option>

<?php } ?>

</select>
		</td>
		
		
		<td class="tablelable">
			Title
		</td>
		<td>
			<input type="text" id="title" name="title" class="form-control tableinput">
		</td>
	</tr>
	
	<tr>
		<td class="tablelable">
			Author
		</td>
		<td>
			<textarea id="justification" name="author" class="form-control tableinput"></textarea>
		</td>
	</tr>

	<tr>
		<td class="tablelable">
			Edition
		</td>
		<td>
			<textarea id="justification" name="edition" class="form-control tableinput"></textarea>
		</td>
	</tr>

	<tr>
		<td class="tablelable">
			ISBN
		</td>
		<td>
			<textarea id="justification" name="isbn" class="form-control tableinput"></textarea>
		</td>
	</tr>

	<tr>
		<td class="tablelable">
			Publisher
		</td>
		<td>
			<textarea id="justification" name="publisher" class="form-control tableinput"></textarea>
		</td>
	</tr>

</table>

		<input type="submit" value="Submit Request" class="btn btn-primary" style="margin-top:15px;">
		
	</form>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
<?php }} ?>