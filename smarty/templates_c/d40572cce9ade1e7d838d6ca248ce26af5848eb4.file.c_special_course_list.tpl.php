<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 11:06:36
         compiled from "/var/www/database/smarty/templates/home/bm/c_special_course_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212275842535e6e7c784844-60198904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40572cce9ade1e7d838d6ca248ce26af5848eb4' => 
    array (
      0 => '/var/www/database/smarty/templates/home/bm/c_special_course_list.tpl',
      1 => 1398677064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212275842535e6e7c784844-60198904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e6e7c7a3ce9_10771783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e6e7c7a3ce9_10771783')) {function content_535e6e7c7a3ce9_10771783($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:100px; text-align:right; }

#results{
	background:#bbb;
	padding:20px;
	margin:20px;
	display:none;
}
</style>

<script>
	
	$( document ).ready(function() {
		$('#target').submit(function (event) {
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
		dataString = $("#target").serialize();
		$.ajax({
			type:"GET",
			url:"./c_special_course_list2.php",
			data:dataString,

			success:function (data) {
				$("#results").css({ "background-color": "bbb"})
				$("#results").html(data);
				$("#results").show();
			}
		});
	}
	
		function showMsg(msg, status){
		var color = "#f00";
		if (status){
			color = "#0f0";
		}
		
		$("#results").html(msg);
		$("#results").css({ "background-color": color})
		$("#results").show("slow");
	}
</script>
  
</div>



<div align="center">

<h1>Special Course List</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="c_special_course_list2.php" id="target" >


	<table>

	</table>

<table>
	<tr>
		<td class="tablelable">
			Years
		</td>
		<td>
			<input type="text" id="years" name="years" class="form-control tableinput" value="5">
		</td>
	</tr>
</table>


		<input type="submit" value="Get Results" class="btn btn-primary" style="margin-top:15px;">
	</form>
	
	<div id="results">TEST</div>
	
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button><?php }} ?>