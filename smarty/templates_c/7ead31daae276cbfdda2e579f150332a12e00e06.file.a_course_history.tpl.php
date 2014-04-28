<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 07:05:04
=======
<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 06:10:38
=======
<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 05:37:58
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
         compiled from "D:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\CSProject\smarty\templates\home\bm\a_course_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934535dca8e2ebdb3-57763318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ead31daae276cbfdda2e579f150332a12e00e06' => 
    array (
      0 => 'D:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\CSProject\\smarty\\templates\\home\\bm\\a_course_history.tpl',
<<<<<<< HEAD
      1 => 1398658392,
=======
<<<<<<< HEAD
      1 => 1398658236,
=======
      1 => 1398656276,
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934535dca8e2ebdb3-57763318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535dca8e35d240_64439484',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535dca8e35d240_64439484')) {function content_535dca8e35d240_64439484($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
			url:"./a_course_history2.php",
			data:dataString,

			success:function (data) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
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
<<<<<<< HEAD
=======
=======
				$("#results").show();
				$("#results").html(data);
			}
		});
	}
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
</script>
  
</div>



<div align="center">

<<<<<<< HEAD
<h1>Course History</h1>
=======
<<<<<<< HEAD
<h1>Instructor List</h1>
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="a_course_history2" id="target" >
<<<<<<< HEAD
=======
=======
<h1>Course History</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="a_course_history2.php" id="target" >
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1


	<table>

	</table>

<table>
	<tr>
		<td class="tablelable">
			Instructor
		</td>
		<td>
			<input type="text" id="instructor" name="instructor" class="form-control tableinput">
		</td>
		
		
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