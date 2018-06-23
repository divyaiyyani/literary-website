
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<html>
<head><center>
<title>About Us
</title></center>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>




<?php
	include('header.php');
?>  

<div class="wrapper">
<div class="container">

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
</div>



<?php
	include('footer.php');
?>  


</body>
</html>
 

