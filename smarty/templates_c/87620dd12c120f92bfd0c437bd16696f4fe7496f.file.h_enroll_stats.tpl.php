<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 06:58:48
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\bm\h_enroll_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4836535dd7bdbecd99-70231384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87620dd12c120f92bfd0c437bd16696f4fe7496f' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\bm\\h_enroll_stats.tpl',
      1 => 1398661126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4836535dd7bdbecd99-70231384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535dd7bdc69db5_79700472',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535dd7bdc69db5_79700472')) {function content_535dd7bdc69db5_79700472($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
			url:"./h_enroll_stats2.php",
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

<h1>Enrollment Statistics</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="h_enroll_stats2.php" id="target" >


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