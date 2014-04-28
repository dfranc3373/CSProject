<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 08:01:24
         compiled from "/var/www/database/smarty/templates/home/instructors/add_special_request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252979845535e3ea044dee5-99049928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34479242754706c49ba6b54c593c3bc92f06980c' => 
    array (
      0 => '/var/www/database/smarty/templates/home/instructors/add_special_request.tpl',
      1 => 1398686482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252979845535e3ea044dee5-99049928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e3ea0485456_62107433',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e3ea0485456_62107433')) {function content_535e3ea0485456_62107433($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/instructors/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
			url:"./add_special_request2.php",
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


<h1>Add Special Request</h1>

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:150px; text-align:right; }
</style>

<form method="POST" action="add_special_request2.php" id="addRequest" >
<table>
	<tr>
		<td class="tablelable">
			Course Code
		</td>
		<td>
			<input type="text" id="course_code" name="course_code" class="form-control tableinput">
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
			Justification
		</td>
		<td>
			<textarea id="justification" name="justification" class="form-control tableinput"></textarea>
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