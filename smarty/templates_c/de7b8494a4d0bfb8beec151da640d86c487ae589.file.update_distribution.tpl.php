<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 08:10:28
         compiled from "/var/www/database/smarty/templates/home/instructors/update_distribution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334752992535e442af2dd33-89992762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7b8494a4d0bfb8beec151da640d86c487ae589' => 
    array (
      0 => '/var/www/database/smarty/templates/home/instructors/update_distribution.tpl',
      1 => 1398686998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334752992535e442af2dd33-89992762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e442b00a700_15095049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e442b00a700_15095049')) {function content_535e442b00a700_15095049($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/instructors/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div align="center">

<script>
	
	$( document ).ready(function() {
		$('#addUpdate').submit(function (event) {
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
		dataString = $("#addUpdate").serialize();
		$.ajax({
			type:"POST",
			url:"./update_distribution2.php",
			data:dataString,
			dataType: 'json',

			success:function (data) {
				showMsg(data.message, data.UpdateDistribution);
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

<form method="POST" action="add_special_request2.php" id="addUpdate" >
<table>
	<tr>
		<td class="tablelable">
			Distribution
		</td>
		<td>

		<select name="distribution">

			<option value="1">Fall</option>

			<option value="2">Spring</option>

		</select>

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