<?php /* Smarty version Smarty-3.1.12, created on 2014-04-28 09:38:17
         compiled from "/var/www/database/smarty/templates/home/instructors/course_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882744576535e461a464ca4-65535551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d6c9a479fef8ad724f55debb0243325a8a7bfc' => 
    array (
      0 => '/var/www/database/smarty/templates/home/instructors/course_list.tpl',
      1 => 1398692265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882744576535e461a464ca4-65535551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_535e461a4ae331_12900099',
  'variables' => 
  array (
    'file' => 0,
    'courses' => 0,
    'c' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e461a4ae331_12900099')) {function content_535e461a4ae331_12900099($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("home/instructors/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
jquery.tablesorter.js"></script>

<div align="center">

<script>
	
	$( document ).ready(function() {

        	$("#myTable").tablesorter({ sortList: [[13,1]] });

	});

function sendInfo(book_id) {

	var data = { book_id: book_id,
                     title: $('#title' + book_id).val(),
                     author: $('#author' + book_id).val(),
                     edition: $('#edition' + book_id).val(),
                     isbn: $('#isbn' + book_id).val(),
                     publisher: $('#publisher' + book_id).val()
                   };

	$.ajax({
			type:"POST",
			url:"./updateBook.php",
			data: data,
			dataType: 'json',

			success:function (data) {

				alert(data.message);

			}
		});

}

function deleteBook(book_id) {

var data = { book_id: book_id };

	$.ajax({
			type:"POST",
			url:"./deleteBook.php",
			data: data,
			dataType: 'json',

			success:function (data) {

				alert(data.message);

			}
		});

}

</script>

<div id="result" style="text-align:center;"></div>

<h1>Course List</h1>

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:150px; text-align:right; }
</style>

<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th>CourseID</th> 
    <th>Course</th> 
    <th>Start Time</th>
    <th>End Time</th>
    <th>Days</th>
    <th>Building</th>
    <th>Room</th>
    <th>Edit Textbook</th>
</tr> 
</thead> 
<tbody>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<tr> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->course;?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->start_time;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->end_time;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->days;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->building;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->room;?>
</td>
    <td><button onclick="$('#dialog-form<?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
').dialog({autoOpen: false, width: 900, height: 500}); $('#dialog-form<?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
').dialog('open');">Edit Textbook</button>

<div id="dialog-form<?php echo $_smarty_tpl->tpl_vars['c']->value->course_id;?>
" title="Edit Books" class="dialog" style="display:none;">
<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value->textbooks; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
<fieldset style="border: 1px solid;">
<label for="title<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
">Title</label>
<input type="text" name="title<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" id="title<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" class="text ui-widget-content ui-corner-all" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->title;?>
"
<label for="author<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
">Author</label>
<input type="text" name="author<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" id="author<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" class="text ui-widget-content ui-corner-all" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->author;?>
">
<label for="edition<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
">Edition</label>
<input type="text" name="edition<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" id="edition<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" class="text ui-widget-content ui-corner-all" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->edition;?>
">
<label for="isbn<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
">ISBN</label>
<input type="text" name="isbn<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" id="isbn<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" class="text ui-widget-content ui-corner-all" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->isbn;?>
">
<label for="publisher<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
">Publisher</label>
<input type="text" name="publisher<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" id="publisher<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
" class="text ui-widget-content ui-corner-all" value="<?php echo $_smarty_tpl->tpl_vars['b']->value->publisher;?>
">

<button onclick="sendInfo(<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
);">Update Info</button>

<br />

<button onclick="deleteBook(<?php echo $_smarty_tpl->tpl_vars['b']->value->textbook_id;?>
);">Delete Book</button>

</fieldset>

<br />

<br />

<?php } ?>

</div>

</tr>

<?php } ?>
</tbody> 
</table>


</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
<?php }} ?>