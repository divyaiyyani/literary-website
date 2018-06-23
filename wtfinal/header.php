

<html>
<style>
#sub {
    display: none;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Fiction Addiction</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="syns.php">Stories</a></li>
      <li><a href="synp.php">Poems</a></li> 
      <li><a href="sync.php">Caricatures</a></li>  
      <li><a href="search.php">Search</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="Subscribe.php" id="fdbk">Subscribe</a></li>
      <li><a href="subs_details.php" id="sub">Subscription Details</a></li>
   </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="destroy.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['username'];?></a></li>
    </ul>
  </div>
</nav>
<?php
if(isset($_SESSION['username'])){
  
  if($_SESSION['username']=='admin@a.com'){
  echo '
<script>
    document.getElementById("sub").style.display="block";
    document.getElementById("fdbk").style.display="none";
</script>
';
  }
}

?>
</body>
</html>