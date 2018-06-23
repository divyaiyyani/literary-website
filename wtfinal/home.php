<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/homec.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.col{
    background-color: lightblue;
}
</style>

</head>
<body>

<?php
	include('header.php');
?> 

<div class="container-fluid">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="pics/car.jpg" alt="Chania" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="pics/gar.jpg" alt="Chania" width="100%" height="100%">
      </div>
    
      <div class="item">
        <img src="pics/hobbes.jpg" alt="Flower" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="pics/mirror.jpg" alt="Flower" width="100%" height="100%">
      </div>

       <div class="item">
        <img src="pics/mumbai.jpg" alt="Flower" width="100%" height="100%">
      </div>

        <div class="item">
        <img src="pics/peanut.jpg" alt="Flower" width="100%" height="100%">
      </div>
  
        <div class="item">
        <img src="pics/rain.jpg" alt="Flower" width="100%" height="100%">
      </div>
    
        <div class="item">
        <img src="pics/strings.jpg" alt="Flower" width="100%" height="100%">
      </div>

        <div class="item">
        <img src="pics/voyage.jpg" alt="Flower" width="100%" height="100%">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
  <center><h5><pre>Stories</pre></h5></center>
  </div>


  <div class="col-sm-4">
  <center><h5><pre>Poems</pre></h5></center>
  </div>


  <div class="col-sm-4">
  <center><h5><pre>Caricatures</pre></h5></center>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
     <img src="story.jpg" 
      onmouseover="this.src='storyy.jpg'"
      onmouseout="this.src='story.jpg'"
      border="0" alt="Story" style="height:300px; width:250px; margin-left:75px; margin-right:10px;"/>
     <a href="#"></a>
  </div>
  <div class="col-sm-4">
     <img src="poetry.jpg" 
      onmouseover="this.src='poetryy.jpg'"
      onmouseout="this.src='poetry.jpg'"
      border="0" alt="Poem" style="height:300px; width:250px; margin-left:100px;"/></a>
     <a href="#"></a>
  </div>
  <div class="col-sm-4">
     <img src="comics.png" 
      onmouseover="this.src='comicss.jpg'"
      onmouseout="this.src='comics.png'"
      border="0" alt="Caricature" style="height:300px; width:250px; margin-left:100px;"/></a>
     <a href="#"></a>
  </div>
</div>

<div class="col">
<center>
<iframe width="600" height="400"  style="border:none;" src="http://output60.rssinclude.com/output?type=iframe&amp;id=1172008&amp;hash=08780657e0e644365d05b4b61ee2dd6b"></iframe>
</center>
</div>

<?php
  include('footer.php');
?> 



</body>
</html>