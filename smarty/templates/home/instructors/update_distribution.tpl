{include file="home/instructors/header.tpl"}

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
