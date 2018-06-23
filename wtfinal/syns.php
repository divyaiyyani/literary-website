<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stories</title>
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
    <li><a data-toggle="tab" href="#menu1"><img src="pics\gui.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu2"><img src="pics\reflect.jpg"></a></li>
    <li><a data-toggle="tab" href="#menu3"><img src="pics\rss.jpg"></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <img src="pics\wel.jpg" width="100%">
    </div>
    <div id="menu1" class="tab-pane fade">
      <a href="Stories/guitar.php"><h3>Guitar Strings</h3></a>
      <p>Like the medolius riff of a guitar, this love story begins with sweetness . When two people from different walks of life collide, will music be enough to keep them together? Or will the same music drive them apart?</p>
      <img src="pics\guitar.jpg" width="100%">
    </div>
    <div id="menu2" class="tab-pane fade">
      <a href="Stories/reflections.php"><h3>Reflections</h3></a>
      <p>The opulent Mirror mansion beckons to the tourists coming to the forgotten mountains. Set in the chilly, haunting locales of the untouched hills, this story welcomes our hero into a heartland of lies, deceit and horror. Luring guests into cosy warmth, how does this mansion suffocate them? Who is behind all this? Or is it the work of something beyond the world?</p>
      <img src="pics\reflections.jpg" width="100%">
    </div>
    <div id="menu3" class="tab-pane fade">
      <a href="Stories/voyages.php"><h3>RSS Voyages</h3></a>
      <p>Captain and his trusted lieutenant Natalie embark on a regular mission to find a tiny lost gentleman millions of light years away from earth. A little help from the captain sends the gentleman on his way. Months later, Captain discovers that  a kind deed never goes waste.</p>
      <img src="pics\voyages.jpg" width="100%">
    </div>
  </div>
</div>



<?php
  include('footer.php');

?> 


</body>
</html>