<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<head>
  <title>Poems </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
	include('header.php');

?> 

<div class="container">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><img src="pics\wel.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu1"><img src="pics\walk.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu2"><img src="pics\carpar.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu3"><img src="pics\city.jpg"></a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <img src="pics\wel.jpg" width= "100%">
    </div>
    <div id="menu1" class="tab-pane fade">
      <a href="walkinrain.php"><h3>Walk in the rain</h3></a>
      <p>A poem of love and longing need not be an epic to be important. Stories are often just the longings of everyday life. This is a short tale of a girl who took a long walk in the rain. Love comes in all sorts of surprising moments..................and goes even more surprisingly.......</p>
      <img src="pics\prain.jpg" width= "100%">
    </div>
    <div id="menu2" class="tab-pane fade">
      <a href="car.php"><h3>CarPark</h3></a>
      <p>What if cars had emotions? What if they could speak? What would they say? Would they chide us for our untidy habits or be easy-going a the good natured uncle? Let’s go to the carpark and find out.</p>
      <img src="pics\carpark.jpg" width= "100%">
    </div>
    <div id="menu3" class="tab-pane fade">
      <a href="city.php"><h3>City of dreams</h3></a>
      <p>The Maximum City is a meting point of all cultures and smells and food and languages. Mumbai welcomes everyone with open arms and this is my ode to the city I love so much. The city wher the night is alive and where dreams become reality.........</p>
      <img src="pics\dreams.jpg" width= "100%">
    </div>
  </div>
</div>


<?php
  include('footer.php');

?> 



</body>
</html>