{include file="home/instructors/header.tpl"}

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
