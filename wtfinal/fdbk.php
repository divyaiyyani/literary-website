<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Feedback data </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  include('header.php');

?>  
<div class="container">
	<div class="table-responsive">
		
		<br />
		<table class="table table-bordered table-striped" id="fdbk">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Time</th>
			</tr>
		</table>
	</div>
</div>

<?php
  include('footer.php');
?> 
</body>
</html>
<script>
	$(document).ready(function(){
		$.getJSON("subs.json",function(data){
			var sub_data = '';
			$.each(data,function(key,value){
				sub_data += '<tr>';
				sub_data += '<td>'+value.name+'</td>';
				sub_data += '<td>'+value.email+'</td>';
				sub_data += '<td>'+value.subject+'</td>';
				sub_data += '<td>'+value.time+'</td>';
				sub_data += '<tr>';
			});

			$('#fdbk').append(sub_data);
		});
	});
</script>