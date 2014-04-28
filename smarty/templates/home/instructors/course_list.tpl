{include file="home/instructors/header.tpl"}

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<link rel="stylesheet" href="{$file}themes/blue/style.css" type="text/css" media="print, projection, screen" />

<script type="text/javascript" src="{$file}jquery.tablesorter.js"></script>

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
{foreach from=$courses item=c}
<tr> 
    <td>{$c->course_id}</td> 
    <td>{$c->course}</td> 
    <td>{$c->start_time}</td>
    <td>{$c->end_time}</td>
    <td>{$c->days}</td>
    <td>{$c->building}</td>
    <td>{$c->room}</td>
    {literal}<td><button onclick="$('#dialog-form{/literal}{$c->course_id}{literal}').dialog({autoOpen: false, width: 900, height: 500}); $('#dialog-form{/literal}{$c->course_id}{literal}').dialog('open');">Edit Textbook</button>{/literal}

<div id="dialog-form{$c->course_id}" title="Edit Books" class="dialog" style="display:none;">
{foreach from=$c->textbooks item=b}
<fieldset style="border: 1px solid;">
<label for="title{$b->textbook_id}">Title</label>
<input type="text" name="title{$b->textbook_id}" id="title{$b->textbook_id}" class="text ui-widget-content ui-corner-all" value="{$b->title}"
<label for="author{$b->textbook_id}">Author</label>
<input type="text" name="author{$b->textbook_id}" id="author{$b->textbook_id}" class="text ui-widget-content ui-corner-all" value="{$b->author}">
<label for="edition{$b->textbook_id}">Edition</label>
<input type="text" name="edition{$b->textbook_id}" id="edition{$b->textbook_id}" class="text ui-widget-content ui-corner-all" value="{$b->edition}">
<label for="isbn{$b->textbook_id}">ISBN</label>
<input type="text" name="isbn{$b->textbook_id}" id="isbn{$b->textbook_id}" class="text ui-widget-content ui-corner-all" value="{$b->isbn}">
<label for="publisher{$b->textbook_id}">Publisher</label>
<input type="text" name="publisher{$b->textbook_id}" id="publisher{$b->textbook_id}" class="text ui-widget-content ui-corner-all" value="{$b->publisher}">

<button onclick="sendInfo({$b->textbook_id});">Update Info</button>

<br />

<button onclick="deleteBook({$b->textbook_id});">Delete Book</button>

</fieldset>

<br />

<br />

{/foreach}

</div>

</tr>

{/foreach}
</tbody> 
</table>


</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>
