<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Caricatures </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<?php
	include('header.php');

?>  

<div class="container">

  <ul class="nav nav-tabs">
 <li class="active"><a data-toggle="tab" href="#home"><img src="pics\wel.jpg" ></a></li>
    <li><a data-toggle="tab" href="#menu1"><img src="pics\garfield.jpg" ></a></li>
    <li><a data-toggle="tab" href="#menu2"><img src="pics\snoopy.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu3"><img src="pics\calvin.jpg"></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   <img src="pics\wel.jpg" width="100%">
  
    </div>
    <div id="menu1" class="tab-pane fade">
      <a href="caricgarfield.php"><h3>Garfield</h3></a>
      <p>Let garfield tickle your funny bone with his antics!!</p><br>
      <img src="pics\garf.jpg" width="100%">
    </div>
    <div id="menu2" class="tab-pane fade">
      <a href="caricpeanuts.php"><h3>Peanuts</h3></a>
      <p>Snoopy calls out to you..... "Come along and enjoy some time with Charlie Brown and friends!"</p><br>
      <img src="pics\pea.jpg" width="100%">
    </div>
    <div id="menu3" class="tab-pane fade">
      <a href="cariccalvin.php"><h3>Calvin and Hobbes</h3></a>
      <p>"The biggest indication that there's intelligent life elsewhere is that none of them have tried to contact us." Listen to such pearls of wisdom from Calvin and his bestie Hobbes</p><br>
      <img src="pics\calvin2.jpg" width="100%" >
      <a href=""></a>
    </div>
  </div>
</div>



<?php
  include('footer.php');
?>

</body>
</html>