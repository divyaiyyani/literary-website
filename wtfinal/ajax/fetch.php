<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "fiction");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM db
  WHERE Author LIKE '%".$search."%'
  OR Universe LIKE '%".$search."%' 
  OR Name LIKE '%".$search."%' 
  OR Pages LIKE '%".$search."%' 
  OR Genre LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM db ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Author</th>
     <th>Name</th>
     <th>Universe</th>
     <th>Pages</th>
     <th>Genre</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Author"].'</td>
	<td>'.$row["Name"].'</td>
    <td>'.$row["Universe"].'</td>
    <td>'.$row["Pages"].'</td>
    <td>'.$row["Genre"].'</td>
   
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>