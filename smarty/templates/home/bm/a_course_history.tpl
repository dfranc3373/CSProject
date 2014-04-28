{include file="home/header.tpl"}

<style>
.tableinput{ height:25px; width: 150px; margin:2px; margin-left:5px; margin-right:20px; padding:2px; text-align:center;}
.long{ width:425px;}
.tablelable{ width:100px; text-align:right; }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1

#results{
	background:#bbb;
	padding:20px;
	margin:20px;
	display:none;
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
</style>

<script>
	
	$( document ).ready(function() {
<<<<<<< HEAD
		$('#target').submit(function (event) {
=======
<<<<<<< HEAD
		$('#target').submit(function (event) {
=======
<<<<<<< HEAD
		$('#target').submit(function (event) {
=======
		$('#addInstructor').submit(function (event) {
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		dataString = $("#target").serialize();
		$.ajax({
			type:"GET",
			url:"./a_course_history2.php",
			data:dataString,

			success:function (data) {
<<<<<<< HEAD
				$("#results").css({ "background-color": "bbb"})
				$("#results").html(data);
				$("#results").show();
=======
<<<<<<< HEAD
				$("#results").css({ "background-color": "bbb"})
				$("#results").html(data);
				$("#results").show();
=======
				$("#results").show();
				$("#results").html(data);
			}
		});
	}
</script>
=======
		dataString = $("#addInstructor").serialize();
		$.ajax({
			type:"POST",
			url:"./add_instructor2.php",
			data:dataString,
			dataType: 'json',

			success:function (data) {
				showMsg(data.message, data.InstructorAdded );
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
			}
		});
	}
	
<<<<<<< HEAD
		function showMsg(msg, status){
=======
<<<<<<< HEAD
		function showMsg(msg, status){
=======
	function showMsg(msg, status){
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		var color = "#f00";
		if (status){
			color = "#0f0";
		}
		
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		$("#results").html(msg);
		$("#results").css({ "background-color": color})
		$("#results").show("slow");
	}
</script>
<<<<<<< HEAD
=======
=======
		$("#results").hide();
		$("#result").html(msg);
		$("#result").css({ "background-color": color})
		$("#results").show("slow");
	}
</script>

<div id="result" style="text-align:center;">
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
  
</div>



<div align="center">

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
<h1>Course History</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
<<<<<<< HEAD
	<form method="POST" action="a_course_history2" id="target" >
=======
<<<<<<< HEAD
	<form method="POST" action="a_course_history2" id="target" >
=======
	<form method="POST" action="a_course_history2.php" id="target" >
=======
<h1>Add Instructor</h1>

<div style="width: 800px; font-size: 14px;" align="center">
	
	<form method="POST" action="add_instructor2.php" id="addInstructor" >
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1


	<table>

	</table>

<table>
	<tr>
		<td class="tablelable">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
			Instructor
		</td>
		<td>
			<input type="text" id="instructor" name="instructor" class="form-control tableinput">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
			User ID
		</td>
		<td>
			<input type="text" id="userid" name="userid" class="form-control tableinput">
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		</td>
		
		
		<td class="tablelable">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
			Years
		</td>
		<td>
			<input type="text" id="years" name="years" class="form-control tableinput" value="5">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		</td>
	</tr>
</table>


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
		<input type="submit" value="Get Results" class="btn btn-primary" style="margin-top:15px;">
	</form>
	
	<div id="results">TEST</div>
	
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
		<input type="submit" value="Add Professor" class="btn btn-primary" style="margin-top:15px;" id="addProf">
		
	</form>
	
>>>>>>> c6341a3a73e86512336c82bb46da472291dd78f0
>>>>>>> a69cb9e0bc485fd91bb1c296ad34e7aa74fe9fae
>>>>>>> d2a679cf06f0ba66b4d8a732fdfecf6b93c89ff1
</div>

</div>

<button align="center" type="button" class="btn btn-warning btn-lg btn-block"><h1>Project for Database Class</h1></button>

<div align="center" style="font-size: 19px;">Noah Metzger</div>
<div align="center" style="font-size: 19px;">Brian Fairbanks</div>
<div align="center" style="font-size: 19px;">Derrick Franco</div>

</button>